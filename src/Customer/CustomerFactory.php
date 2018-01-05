<?php
    namespace Bookstore\Customer;

    use Bookstore\Customer\Basic;
    use Bookstore\Customer\Premium;

    class CustomerFactory {
        public static function factory(
            string $type,
            int $id,
            string $firstname,
            string $surname,
            string $email
        ): Customer {
            $classname = __NAMESPACE__ . '\\' . ucfirst($type);
            var_dump($classname);
            if (!class_exists($classname)) {
                throw new \InvalidArgumentException('Wrong type.');
            }
            return new $classname($id, $firstname, $surname, $email);
        }
    }