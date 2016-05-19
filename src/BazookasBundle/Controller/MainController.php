<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
use BazookasBundle\Form\MediaType;
use BazookasBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use BazookasBundle\Form\FileUploadType;
use \ZipArchive;
use \RecursiveDirectoryIterator;
use \RecursiveIteratorIterator;

class MainController extends Controller
{
    /**
     * @Route("/", name="Home")
     */
    public function indexAction()
    {
        return $this->render('BazookasBundle:Default:home.html.twig');
    }


    /**
     * @Route("/collectionitem/list", name="CollectionitemList")
     */
    public function itemListAction() {
        $columnTypes = $this->getColumnTypes();

        $repository = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem');
        $collectionItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:collectionList.html.twig',
          array('highestColumn' => intval($this->getHighestColumnID()), 'columns' => $columnTypes, 'items' => $collectionItems));
    }


    /**
     * @Route("/collectionitem/add/{toColumn}", defaults={"toColumn" = 0}, name="AddCollectionitem")
     */
    public function collectionItemAddAction(Request $request, $toColumn) {
        $collectionItemType = new CollectionItemType($this->getDoctrine()->getEntityManager());
        if ($toColumn == 0) {
            $toColumn = intval($this->getHighestColumnID()) + 1;
        }
        $form = $collectionItemType->buildForm($this->createFormBuilder(),
            array('edit' => false, 'posX' => 0, 'posY' => 0, 'yearFrom' => 0, 'path' => ''));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem = $this->setCollectionItemProperties($collectionItem, $data, $toColumn);

            $collectionItem->uploadImage($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Nieuw item in kolom '.$toColumn ,'form' => $form->createView(),
                'form_id' => 'collection_form'));
    }

    /**
     * @Route("/collectionitem/edit/{id}", name="EditCollectionitem")
     */
     public function collectionItemEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $collectionItemType = new CollectionItemType($this->getDoctrine()->getEntityManager());
        $form = $collectionItemType->buildForm($this->createFormBuilder(),
            array('edit' => true, 'posX' => $item->getPositionX(), 'posY' => $item->getPositionY(),
                  'yearFrom' => $item->getYearFrom(), 'path' => $item->getImageURL()));

        $form = $this->fillCollectionItemForm($form, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = $this->setCollectionItemProperties($item, $data, $item->getColumnID());
            $item->uploadImage($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Pas item aan' ,'form' => $form->createView(),
                'form_id' => 'collection_form'));
    }

    /**
    * @Route("/timejump/add", name="AddTimejump")
    */
    public function timejumpAddAction(Request $request) {
        $collectionItem = new CollectionItem();
        $form = $this->buildTimejumpForm($collectionItem);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $collectionItem->setType('tijdssprong');
            $collectionItem->setColumnID(intval($this->getHighestColumnID()) + 1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Nieuwe tijdssprong' ,'form' => $form->createView(),
                'form_id' => 'timejump_form'));
    }

    /**
    * @Route("/timejump/edit/{id}", name="EditTimejump")
    */
    public function timejumpEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $form = $this->buildTimejumpForm($item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Pas item aan' ,'form' => $form->createView(),
                'form_id' => 'timejump_form'));
    }

    /**
    * @Route("/map/add", name="AddMap")
    */
    public function mapAddAction(Request $request) {
        $collectionItem = new CollectionItem();
        $form = $this->buildMapForm($collectionItem, true);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $collectionItem->setType('map');
            $collectionItem->setColumnID(intval($this->getHighestColumnID()) + 1);

            $collectionItem->uploadImage($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Nieuwe map' ,'form' => $form->createView(),
                'form_id' => 'map_form'));
    }

    /**
    * @Route("/map/edit/{id}", name="EditMap")
    */
    public function mapEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $form = $this->buildMapForm($item, false);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item->uploadImage($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('CollectionitemList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Pas item aan' ,'form' => $form->createView(),
                'form_id' => 'map_form'));
    }

    /**
    * @Route("/item/delete/{id}", name="DeleteItem")
    */
    public function itemDeleteAction($id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();

        return $this->redirectToRoute('CollectionitemList');
    }

    /**
     * @Route("/media/list", name="MediaList")
     */
    public function mediaListAction()
    {
        $repository = $this->getDoctrine()->getRepository('BazookasBundle:Media');
        $mediaItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:mediaList.html.twig',
          array('items' => $mediaItems, 'collectionCount' => $this->getCollectionItemsCount()));
    }

    /**
     * @Route("/media/add", name="AddMedia")
     */
    public function mediaAddAction(Request $request)
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(),
            array('pathNL' => '', 'pathFR' => ''));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $media = new Media();
            $media = $this->setMediaProperties($media, $data);

            $media->uploadFiles($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            return $this->redirectToRoute('MediaList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Nieuwe media' ,'form' => $form->createView(),
                'form_id' => 'media_form'));
    }

    /**
     * @Route("/media/edit/{id}", name="EditMedia")
     */
    public function mediaEditAction(Request $request, $id)
    {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:Media')->find($id);

        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(),
            array('pathNL' => $item->getContentURLNL(), 'pathFR' => $item->getContentURLFR()));

        $form = $this->fillMediaForm($form, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = $this->setMediaProperties($item, $data);
            $item->uploadFiles($this->get('app.helper.mediautils'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('MediaList');
        }
        return $this->render('BazookasBundle:Default:form.html.twig',
          array('title' => 'Pas media aan' ,'form' => $form->createView(),
                'form_id' => 'media_form'));
    }

    /**
     * @Route("/media/delete/{id}", name="DeleteMedia")
     */
    public function mediaDeleteAction($id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:Media')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();

        return $this->redirectToRoute('MediaList');
    }

    /**
    * @Route("/export", name="ExportFiles")
    * @Route("/export/", name="ExportFilesTrailingSlash")
    */
    public function exportFiles() {
        $this->exportDatabase();

        $rootPath = realpath('Export');

        // Initialize archive object
        $zip = new \ZipArchive();
        $zip->open('Export.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($rootPath),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        $response = new Response();
        $response->headers->set('Content-type', 'application/zip');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', 'Export.zip'));
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->setContent(file_get_contents('Export.zip'));

        return $response;
    }

    private function exportDatabase() {
        $host      = $this->getParameter('database_host');
        $user      = $this->getParameter('database_user');
        $password  = $this->getParameter('database_password');
        $database  = $this->getParameter('database_name');
        $mysqldump = $this->getParameter('mysqldump_path');
        $siteUrl   = $this->get('kernel')->getRootDir();
        $webRoot   = realpath($siteUrl.'/../web').'/';

        if ($this->exec_enabled()) {
            exec($mysqldump.' --user='.$user.' --password='.$password.' --host="'.$host.'" "'.$database.'" > "'.$webRoot.'Export/Database/export.sql"');
        }
    }

    private function exec_enabled() {
        $disabled = explode(', ', ini_get('disable_functions'));
        return !in_array('exec', $disabled);
    }

    /**
    * @Route("/removefile", name="RemoveFile")
    */
    public function removeFile(Request $request) {
        $filepath = $request->query->get('file');
        $previousUrl = $request->headers->get('referer');
        $siteUrl = $this->get('kernel')->getRootDir();
        $webRoot = realpath($siteUrl.'/../web').'/';

        if ($filepath != null && file_exists($webRoot.$filepath)) {
            unlink($webRoot.$filepath);
            $this->removeFileReferences($filepath);
        }

        return $this->redirect($previousUrl);
    }

    private function getCollectionItemsCount() {
        $em = $this->getDoctrine()->getManager();
        return $em->createQueryBuilder()
                  ->select('COUNT(c)')
                  ->from('BazookasBundle:CollectionItem', 'c')
                  ->where('c.type = :type')
                  ->setParameter('type', 'media')
                  ->getQuery()
                  ->getSingleScalarResult();
    }

    private function getHighestColumnID() {
        $em = $this->getDoctrine()->getManager();
        return $em->createQueryBuilder()
                  ->select('MAX(c.columnID)')
                  ->from('BazookasBundle:CollectionItem', 'c')
                  ->getQuery()
                  ->getSingleScalarResult();
    }

    private function getColumnTypes() {
        $em = $this->getDoctrine()->getManager();
        return $em->createQueryBuilder()
                  ->select('c.columnID, c.type')
                  ->from('BazookasBundle:CollectionItem', 'c')
                  ->distinct()
                  ->addOrderBy('c.columnID', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    private function removeFileReferences($filepath) {
        $em = $this->getDoctrine()->getManager();
        $em->createQueryBuilder()
           ->update('BazookasBundle:CollectionItem', 'c')
           ->set('c.imageURL', ':value')
           ->setParameter('value', null)
           ->where('c.imageURL = :path')
           ->setParameter('path', $filepath)
           ->getQuery()
           ->getResult();

       $em->createQueryBuilder()
           ->update('BazookasBundle:Media', 'm')
           ->set('m.contentURLNL', ':value')
           ->setParameter('value', null)
           ->where('m.contentURLNL = :path')
           ->setParameter('path', $filepath)
           ->getQuery()
           ->getResult();

       $em->createQueryBuilder()
           ->update('BazookasBundle:Media', 'm')
           ->set('m.contentURLFR', ':value')
           ->setParameter('value', null)
           ->where('m.contentURLFR = :path')
           ->setParameter('path', $filepath)
           ->getQuery()
           ->getResult();
    }

    private function setCollectionItemProperties($item, $data, $column = null) {
        $item->setTitleNL($data["titleNL"]);
        $item->setTitleFR($data["titleFR"]);
        $item->setDescriptionNL($data["descriptionNL"]);
        $item->setDescriptionFR($data["descriptionFR"]);
        $item->setFile($data["file"]);
        $item->setCategory($data["categoryID"]);
        $item->setYear($data["year"]);
        $item->setType('media');
        $item->setMustShowDate($data["mustShowDate"]);
        $item->setYearFrom($data["yearFrom"]);
        $item->setYearTill($data["yearTill"]);
        $item->setColumnID($column);

        if ($_POST['posX'] !== "0" && $_POST['posY'] !== "0") {
            $item->setPositionX($_POST['posX']);
            $item->setPositionY($_POST['posY']);
        } else {
            $item->setPositionX(-1);
            $item->setPositionY(-1);
        }

        return $item;
    }

    private function setMediaProperties($media, $data) {
        $media->setTitleNL($data["titleNL"]);
        $media->setTitleFR($data["titleFR"]);
        $media->setDescriptionNL($data["descriptionNL"]);
        $media->setDescriptionFR($data["descriptionFR"]);
        $media->setType($data["type"]);
        $media->setFileNL($data["fileNL"]);
        $media->setFileFR($data["fileFR"]);
        $media->setCollectionID($data["collectionID"]);

        return $media;
    }

    private function fillCollectionItemForm($form, $item) {
        $form->get('titleNL')->setData($item->getTitleNL());
        $form->get('titleFR')->setData($item->getTitleFR());
        $form->get('descriptionNL')->setData($item->getDescriptionNL());
        $form->get('descriptionFR')->setData($item->getDescriptionFR());
        $form->get('categoryID')->setData($item->getCategory());
        $form->get('year')->setData($item->getYear());
        $form->get('mustShowDate')->setData($item->getMustShowDate());
        $form->get('yearFrom')->setData($item->getYearFrom());
        $form->get('yearTill')->setData($item->getYearTill());

        return $form;
    }

    private function fillMediaForm($form, $media) {
        $form->get('titleNL')->setData($media->getTitleNL());
        $form->get('titleFR')->setData($media->getTitleFR());
        $form->get('descriptionNL')->setData($media->getDescriptionNL());
        $form->get('descriptionFR')->setData($media->getDescriptionFR());
        $form->get('type')->setData($media->getType());

        return $form;
    }

    private function buildTimejumpForm($item) {
        return $this->createFormBuilder($item)
                    ->add('yearFrom', ChoiceType::class, array(
                          'label' => 'Jaar van',
                          'required' => true,
                          'choices' => array_combine(range(1930, 2000), range(1930, 2000))
                      ))
                    ->add('yearTill', ChoiceType::class, array(
                          'label' => 'Jaar tot',
                          'required' => true,
                          'choices' => array_combine(range(1930, 2000), range(1930, 2000))
                      ))
                    ->getForm();
    }

    private function buildMapForm($item, $required) {
        return $this->createFormBuilder($item)
                    ->add('file', FileUploadType::class, array(
                        'label' => 'Afbeelding',
                        'required' => true,
                        'required' => $required,
                        'path' => $item->getImageURL()
                    ))
                    ->add('yearFrom', ChoiceType::class, array(
                          'label' => 'Jaar van',
                          'required' => true,
                          'choices' => array_combine(range(1930, 2000), range(1930, 2000))
                      ))
                    ->add('yearTill', ChoiceType::class, array(
                          'label' => 'Jaar tot',
                          'required' => true,
                          'choices' => array_combine(range(1930, 2000), range(1930, 2000))
                      ))
                    ->getForm();
    }
}
