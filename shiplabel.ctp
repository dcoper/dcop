<?php
	$style = array(
    'position' => '',
    'align' => 'C',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => true,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255),
    'text' => true,
    'font' => 'helvetica',
    'fontsize' => 8,
    'stretchtext' => 4
);
    $this->Pdf->core->addPage('', 'USLETTER');
    $this->Pdf->core->setFont('helvetica', '', 12);
	$shipid = $shipment['Shipment']['id'];
	$tracking = $shipment['Shipment']['tracking_number'];
    $this->Pdf->core->cell(30, 0, $shipid);
	$this->Pdf->core->cell(100, 100, $tracking);
	$this->Pdf->core->cell(0, 0, 'CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9', 0, 1);
    $this->Pdf->core->write1DBarcode($tracking, 'C39', '', '', '', 18, 0.4, $style, 'N');
    $this->Pdf->core->Output('shipmentlabel.pdf', 'D');
	
?>