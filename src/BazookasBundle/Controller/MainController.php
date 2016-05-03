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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Response;
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
        // replace this example code with whatever you need
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
     * @Route("/collectionitem/add/{toColumn}", defaults={"toColumn" = 0})
     */
    public function collectionItemAddAction(Request $request, $toColumn) {
        $collectionItemType = new CollectionItemType();
        if ($toColumn == 0) {
            $toColumn = intval($this->getHighestColumnID()) + 1;
        }
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem = $this->setCollectionItemProperties($collectionItem, $data, $toColumn);

            $collectionItem->uploadImage('media');

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Nieuw item in kolom '.$toColumn ,'form' => $form->createView()));
    }

    /**
     * @Route("/collectionitem/edit/{id}")
     */
     public function collectionItemEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form = $this->fillCollectionItemForm($form, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = $this->setCollectionItemProperties($item, $data, $item->getColumnID());
            $item->uploadImage('media');

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Pas item aan' ,'form' => $form->createView()));
    }

    /**
    * @Route("/timejump/add")
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

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Nieuwe tijdssprong' ,'form' => $form->createView()));
    }

    /**
    * @Route("/timejump/edit/{id}")
    */
    public function timejumpEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $form = $this->buildTimejumpForm($item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Pas item aan' ,'form' => $form->createView()));
    }

    /**
    * @Route("/map/add")
    */
    public function mapAddAction(Request $request) {
        $collectionItem = new CollectionItem();
        $form = $this->buildMapForm($collectionItem);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $collectionItem->setType('map');
            $collectionItem->setColumnID(intval($this->getHighestColumnID()) + 1);

            $collectionItem->uploadImage('map');

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Nieuwe map' ,'form' => $form->createView()));
    }

    /**
    * @Route("/map/edit/{id}")
    */
    public function mapEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $form = $this->buildMapForm($item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item->uploadImage('map');

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Pas item aan' ,'form' => $form->createView()));
    }

    /**
    * @Route("/item/delete/{id}")
    */
    public function itemDeleteAction($id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);
 
        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();
 
        return $this->redirect('/meli/collectionitem/list');
    }

    /**
     * @Route("/media/list", name="MediaList")
     */
    public function mediaListAction()
    {
        $repository = $this->getDoctrine()->getRepository('BazookasBundle:Media');
        $mediaItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:mediaList.html.twig', array('items' => $mediaItems));
    }

    /**
     * @Route("/media/add")
     */
    public function mediaAddAction(Request $request)
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $media = new Media();
            $media = $this->setMediaProperties($media, $data);

            $media->uploadFiles();

            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            return $this->redirect('/meli/media/add');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', array('title' => 'Nieuwe media' ,'form' => $form->createView()));
    }

    /**
     * @Route("/media/edit/{id}")
     */
    public function mediaEditAction(Request $request, $id)
    {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:Media')->find($id);

        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        $form = $this->fillMediaForm($form, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = $this->setMediaProperties($item, $data);
            $item->uploadFiles();

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/media/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Pas media aan' ,'form' => $form->createView()));
    }

    /**
     * @Route("/media/delete/{id}")
     */
    public function mediaDeleteAction($id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:Media')->find($id);
 
        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();
 
        return $this->redirect('/meli/media/list');
    }

    /**
    * @Route("/export", name="ExportFiles")
    */
    public function exportFiles() {
        $rootPath = realpath('Media');

        // Initialize archive object
        $zip = new \ZipArchive();
        $zip->open('Media.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

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
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', 'Media.zip'));
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->setContent(file_get_contents('Media.zip'));

        return $response;
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

    private function setCollectionItemProperties($item, $data, $column = null) {
        $item->setTitleNL($data["titleNL"]);
        $item->setTitleFR($data["titleFR"]);
        $item->setDescriptionNL($data["descriptionNL"]);
        $item->setDescriptionFR($data["descriptionFR"]);
        $item->setFile($data["file"]);
        $item->setCategoryID($data["categoryID"]->getId());
        $item->setYear($data["year"]);
        $item->setType('media');
        $item->setMustShowDate($data["mustShowDate"]);
        $item->setPositionX($data["positionX"]);
        $item->setPositionY($data["positionY"]);
        $item->setYearFrom($data["yearFrom"]);
        $item->setYearTill($data["yearTill"]);
        $item->setColumnID($column);

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
        $media->setCollectionID($data["collectionID"]->getId());

        return $media;
    }

    private function fillCollectionItemForm($form, $item) {
        $form->get('titleNL')->setData($item->getTitleNL());
        $form->get('titleFR')->setData($item->getTitleFR());
        $form->get('descriptionNL')->setData($item->getDescriptionNL());
        $form->get('descriptionFR')->setData($item->getDescriptionFR());
        $form->get('categoryID')->setData($item->getCategoryID());
        $form->get('year')->setData($item->getYear());
        $form->get('mustShowDate')->setData($item->getMustShowDate());
        $form->get('positionX')->setData($item->getPositionX());
        $form->get('positionY')->setData($item->getPositionY());
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
                    ->add('yearFrom', IntegerType::class, array(
                         'label' => 'Jaar van',
                         'required' => true,
                         'attr' => array('min' => 1930, 'max' => 2000)
                     ))
                    ->add('yearTill', IntegerType::class, array(
                         'label' => 'Jaar tot',
                         'required' => true,
                         'attr' => array('min' => 1930, 'max' => 2000)
                     ))
                    ->getForm();
    }

    private function buildMapForm($item) {
        return $this->createFormBuilder($item)
                    ->add('file', FileType::class, array(
                        'label' => 'Afbeelding',
                        'required' => true
                    ))
                    ->add('yearFrom', IntegerType::class, array(
                        'label' => 'Jaar van',
                        'required' => true,
                        'attr' => array('min' => 1930, 'max' => 2000)
                      ))
                    ->add('yearTill', IntegerType::class, array(
                        'label' => 'Jaar tot',
                        'required' => true,
                        'attr' => array('min' => 1930, 'max' => 2000)
                      ))
                    ->getForm();
    }
}