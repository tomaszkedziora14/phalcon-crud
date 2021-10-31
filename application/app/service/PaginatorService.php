<?php

namespace service;

class PaginatorService
{
    public function getPage()
    {
      $currentPage = $this->request->getQuery('page', 'int'); // GET
      $users =  Users::find();

      $paginator = new \Phalcon\Paginator\Adapter\Model(
          array(
              "data" => $users,
              "limit"=> 3,
              "page" => $currentPage
          )
      );


      $page = $paginator->getPaginate();

      return $page;
    }
}
