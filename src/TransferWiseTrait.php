<?php
namespace TransferWise;


trait TransferWiseTrait {
    public function transferWise() {
        return new TransferWise();
    }
}
