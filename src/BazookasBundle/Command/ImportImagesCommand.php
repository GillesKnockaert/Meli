<?php

namespace BazookasBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use BazookasBundle\Entity\CollectionItem;

class ImportImagesCommand extends ContainerAwareCommand
{
  private $output;

  protected function configure()
  {
    $this
      ->setName('import:images')
      ->setDescription("importing images")
      ->addArgument(
        'filePath',
        InputArgument::REQUIRED,
        'starting filepath'
      )
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln('<comment>Starting import</comment>');
    $this->output = $output;

    $filePath = $input->getArgument('filePath');
    $category = $this->getCategory($filePath);

    $entityManager = $this->getContainer()->get('doctrine.orm.entity_manager');
    $newBasePath = 'D:\School\20152016\stage\Meli\web\Export\Media\Timeline';
    $yearFolders = scandir($filePath);
    unset($yearFolders[0]);
    unset($yearFolders[1]);
    $count = 0;
    $batchSize = 20;
    foreach($yearFolders as $folder)  {
      $files = scandir($filePath.'/'.$folder);
      unset($files[0]);
      unset($files[1]);
      foreach($files as $file) {
        $newItem = new CollectionItem();
        $newItem->setCategory($newItem);

        //TODO fill new items

        //move the file
        $oldPath = $filePath.'\\'.$folder.'\\'.$file;
        $newPath = $newBasePath.'\\'.$file;
        copy($oldPath, $newPath);
        $newItem->setImageUrl($newPath);

        $entityManager->persist($newItem);

        if ($count % $batchSize === 0) {
          $entityManager->flush();
        }

        //TODO remove this
        break;

      }
    }

    $entityManager->flush();


    //imageUrl
  }

  private function getCategory($filePath) {
      //get the category id from the filename
      //TODO
      $category = explode('\\', $filePath);

      var_dump($category);

      switch($category[count($category) - 1]) {
        case '1-GEBEURTENISSEN':
          $categoryID = 1;
          break;
        case '2-MELI MARKETING':
          $categoryID = 2;
          break;
        case '3-ATTRACTIES':
          $categoryID = 3;
          break;
        case '4-GADGETS':
          $categoryID = 4;
          break;
        case '5-BIJEN EN HONING':
          $categoryID = 5;
          break;
        case '6-SALONS EN CATERING':
          $categoryID = 6;
          break;
        case '':
          $categoryID = 6;
          break;
      }

      //get the category from the db
      $entityManager = $this->getContainer()->get('doctrine.orm.entity_manager');
      $qb = $entityManager->createQueryBuilder();
      $qb
        ->select('c')
        ->from('\BazookasBundle\Entity\Category', 'c')
        ->where($qb->expr()->eq('c.id', ':id'))
        ->setParameter('id', $categoryID)
      ;
      return $qb->getQuery()->getOneOrNullResult();
  }

}
