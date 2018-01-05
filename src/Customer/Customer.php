<?php

    namespace Bookstore\Customer;

    use Bookstore\Customer\Payer;
    
    interface Customer extends Payer {
        public function getMonthlyFee(): float;
        public function getAmountToBorrow(): int;
        public function getType(): string;
    }