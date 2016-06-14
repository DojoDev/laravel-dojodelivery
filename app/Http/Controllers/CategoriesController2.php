<?php

namespace DojoDelivery\Http\Controllers;

use DojoDelivery\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use DojoDelivery\Http\Requests;
use DojoDelivery\Http\Controllers\Controller;

class CategoriesController2 extends Controller
{

    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;

    }
    public function index()
    {
        $nome = 'Categorias';

        $categories = $this->repository->paginate(5);

        $linguagens = [
                'PHP',
                'PYTON',
                'DJANGO',
                'ANGULARJS',
                'IONIC',
               'LARAVEL'

        ];

      return view('admin.categories.index',compact('categories'));
    }
     public function create()
     {
         return view('admin.categories.create');

     }

    public function store(Requests\AdminCategoryRequest2 $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.categories.index');

    }

    public function edit($id)
    {
        $category = $this->repository->find($id);
        return view('admin.categories.edit', compact('category'));

    }

    public function update(Requests\AdminCategoryRequest2 $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.categories.index');
    }


}









