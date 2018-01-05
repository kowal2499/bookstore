<?php
    namespace Bookstore\Customer;

    interface Payer {
        public function pay(float $amount);
        public function isExtentOfTaxes(): bool;
    }