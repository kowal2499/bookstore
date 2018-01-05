<?php
    
    // use Bookstore\Core\Router;
    use Bookstore\Core\Request;
    use Bookstore\Core\Db;
    use Bookstore\Models\CustomerModel;
    use Bookstore\Models\BookModel;
    
    
    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
    $twig = new Twig_Environment($loader);

    // $router = new \Bookstore\Core\Router();
    // $response = $router->route(new Request());
    // echo $response;

    $bookModel = new BookModel(Db::getInstance());
    // $book = $bookModel->get(1);

    $books = $bookModel->getAll(1, 3);

    // $params = ['book' => $book];
    // echo $twig->loadTemplate('book.twig')->render($params);

    $params = ['books' => $books, 'currentPage' => 2];
    echo $twig->loadTemplate('books.twig')->render($params);
    
    // try {
    //     // $customer->getByEmail('roman@erla.pl');
    //     echo "<pre>";
    //     var_dump($bookModel->getAll(1, 100));
    //     echo "</pre>";
    // } catch (\Bookstore\Exceptions\NotFoundException $e) {
    //     echo "<br><strong>Wystąpił błąd:</strong> Szukany rekord został nie znaleziony w bazie";
    // } catch (\Bookstore\Exceptions\InvalidArgumentException $e) {
    //     echo "<br><strong>Wystąpił błąd:</strong> Niezdefiniony typ klasy.";
    // }