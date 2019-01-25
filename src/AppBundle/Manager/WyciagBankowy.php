<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Operacje;
use AppBundle\Helper\OperacjeType;
use AppBundle\Helper\OpisOperacjiDeterminator;
use AppBundle\Repository\OperacjeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Symfony\Component\DependencyInjection;


class WyciagBankowy
{
    private $doctrine;
    private $container;
    /**
     * @var EntityManager
     */
    private $em;
    private $helper;

    public function __construct(DependencyInjection\ContainerInterface $container)
    {
        $this->container = $container;
        $this->doctrine = $this->container->get('doctrine');
        $this->em = $this->container->get('doctrine')->getManager();
        $this->helper = new OpisOperacjiDeterminator();
    }

    /**
     * @param $klucz
     * @return array
     */
    private function stringToFloatNumberParser($klucz)
    {
        return floatval(str_replace([',', ' ',','],[ '.',',',''], $klucz));
//        return floatval(str_replace(",","",str_replace([',', ' ',],[ '.',','], $klucz)));

    }

    public function parsowanieDanych(array $dane_wyciagu_bankowego)
    {
//0,6,7
        $zaczytuj = false;
        $sprawdzWyjatek = false;
        $zakonczenie = 2;
        $obiegPetli = 0;

        /** @var OperacjeRepository $oRepo */
        $oRepo = $this->em->getRepository(Operacje::class);

        foreach ($dane_wyciagu_bankowego as $linia) {



            $daneZLinii = explode(';', $linia);

            $duplikat = false;

            $counter = count($daneZLinii);

            //duplikaty
//            var_dump($daneZLinii);
//            var_dump($counter);

//            if ($sprawdzWyjatek == true) {
//                echo $daneZLinii[0] . '<br>';
//                $daneZLinii[0] = mb_convert_encoding($daneZLinii[0], 'UTF-8');
//                $daneZLinii[0] = str_replace([' ', '?'], ['', ''], $daneZLinii[0]);
//
//                    if ($daneZLinii[0] == '59102024010000060204283016') {
//
//                        echo "Wyjatek!";
//                        continue;
//                    } else{
//                        $sprawdzWyjatek = false;
//                    }
//                }
//
//                if (!empty($daneZLinii[0] == '#Numer rachunku')) {
//                    $sprawdzWyjatek = true;
//                }else{
//                    $sprawdzWyjatek = false;
//
//                }

                if (!empty($daneZLinii[0] == '#Data operacji') && (!empty($daneZLinii[6] == '#Kwota'))) {

                    $zaczytuj = true;
                    $obiegPetli = 1;
                    continue;
                }

                if ($counter == 1 && $zaczytuj == true/*$linia[0] == ''*/) {
                    $zakonczenie--;
                    continue;
                }

                if ($zakonczenie == 0) {

                    break;
                }

                if (!$zaczytuj) {
                    continue;
                }


//                $tablicaDanychZWyciagu = [
//                    0 => $daneZLinii[0],
//                    1 => $daneZLinii[1],
//                    2 => $daneZLinii[2],
//                    3 => $daneZLinii[3],
//                    4 => $daneZLinii[4],
//                    5 => $daneZLinii[5],
//                    6 => $daneZLinii[6],
//                    7 => $daneZLinii[7],
//                ];

//                foreach ($tablicaDanychZWyciagu as $wyciag) {
////                    echo 'Wyciag data: '.$wyciag.'<br>';
//                    foreach ($daneZLinii as $dane) {
//                        if ($wyciag == $dane && $obiegPetli > 1) {
////                            echo 'Dane data: '.$wyciag.'<br>';
////                            echo 'Petla : '.$obiegPetli.'<br>';
//                            $duplikat = true;
//                        }
//                    }
//                }

//                var_dump($tablicaDanychZWyciagu);

                $dataOperacji = date_create($daneZLinii[0]);
                $daneZLinii[0] = $dataOperacji;

                $dataKsiegowania = date_create($daneZLinii[1]);
                $daneZLinii[1] = $dataKsiegowania;

                $daneZLinii[2] = $this->helper->getIntegerValue($daneZLinii[2]);

                $daneZLinii[3] = mb_convert_encoding($daneZLinii[3], 'UTF-8');
                $daneZLinii[4] = mb_convert_encoding($daneZLinii[4], 'UTF-8');

                $daneZLinii[6] = $this->stringToFloatNumberParser($daneZLinii[6]);
                $daneZLinii[7] = $this->stringToFloatNumberParser($daneZLinii[7]);


                /** @var Operacje $wyciagi */
                $wyciagi = $oRepo->findOneBy([
                    'dataOperacji' => $daneZLinii[0],
                    'dataKsiegowania' => $daneZLinii[1],
                    'opisOperacji' => $daneZLinii[2],
                    'tytul' => $daneZLinii[3],
                    'kontrahent' => $daneZLinii[4],
                    'nrKonta' => $daneZLinii[5],
                    'kwota' => $daneZLinii[6],
                    'saldoPoOperacji' => $daneZLinii[7],
                ]);
                if (!empty($wyciagi) && !empty($wyciagi->getId())) {

                    echo "Duplikat!<br>";
                    continue;
                }

                $operacjeEntity = new Operacje();
                $operacjeEntity->setDataOperacji($daneZLinii[0]);
                $operacjeEntity->setDataKsiegowania($daneZLinii[1]);
                $operacjeEntity->setOpisOperacji($daneZLinii[2]);
                $operacjeEntity->setTytul($daneZLinii[3]);
                $operacjeEntity->setKontrahent($daneZLinii[4]);
                $operacjeEntity->setNrKonta($daneZLinii[5]);
                $operacjeEntity->setKwota($daneZLinii[6]);
                $operacjeEntity->setSaldoPoOperacji($daneZLinii[7]);
                $operacjeEntity->setType(OperacjeType::WYCIAG_BANKOWY);


                $this->em->persist($operacjeEntity);
                $this->em->flush();
                echo "NIE DUPLIKAT!<br>";
//
                $obiegPetli++;
            }

            echo "W bazie";



            return "dziala";
        }
    }



