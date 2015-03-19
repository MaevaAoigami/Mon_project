<?php
namespace Agence\AgenceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GetFacture 
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function facture($facture)
    {
        $html = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));

        require_once($this->container->get('kernel')->getRootDir().'/../vendor/ensepar/html2pdf/HTML2PDF.php');

        $html2pdf = new \HTML2PDF('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Agence Danseuses');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Agence Danseuses');
        $html2pdf->pdf->SetKeywords('facture, agence, danseuses');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);    
        $html2pdf->Output('Facture.pdf');
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        
        return $response;
    }
}