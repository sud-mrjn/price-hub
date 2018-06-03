<?php

namespace App\Controller\Api;

use App\Entity\Quotation;

use App\Repository\QuotationRepository;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RfqController extends Controller
{

    /**
     * @Route("/api/rfq/fetch", name="api/rqf/fetch")
     */
    public function fetch(QuotationRepository $quotations){
       $rfq = $quotations->findRfqs();
       return  new JsonResponse(array('rfqs' => $rfq, "success" => true));
    }

    public function show(Quotation $rfq)
    {
      return  new JsonResponse(array('rfqs' => $rfq, "success" => true));
    }
}
