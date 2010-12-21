<?php

// Instantiate the XMLReader object
$reader = new XMLReader();

// Open XML file
$reader->open('hitches.xml');

// Read through the XML data
while($reader->read()){

    // If we found an XML Element and it's local name is 'row'
    if($reader->nodeType == XMLReader::ELEMENT && $reader->localName == 'row'){

        // Assign attributes to variables
        $iProductID = $reader->getAttribute('iProductID');
        $vchProductCode = $reader->getAttribute('vchProductCode');
        $vchPriceCode = $reader->getAttribute('vchPriceCode');
        $hitchUPC = $reader->getAttribute('vchHitchUPC');
        $mHitchList = $reader->getAttribute('mHitchList');

        // And so on........
    }
}
$reader->close(); // Close the reader. Keeps our memory leak to a minimum.

?>
