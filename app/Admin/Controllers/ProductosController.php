<?php

namespace App\Admin\Controllers;

use App\Producto;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Producto';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Producto());

        $grid->column('id', __('Id'));
        $grid->column('marca_id', __('Marca id'));
        $grid->column('nombre-producto', __('Nombre producto'));
        $grid->column('sabor', __('Sabor'));
        $grid->column('descripsion-producto', __('Descripsion producto'));
        $grid->column('precio', __('Precio'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Producto::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('marca_id', __('Marca id'));
        $show->field('nombre-producto', __('Nombre producto'));
        $show->field('sabor', __('Sabor'));
        $show->field('descripsion-producto', __('Descripsion producto'));
        $show->field('precio', __('Precio'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Producto());

        $form->number('marca_id', __('Marca id'));
        $form->text('nombre-producto', __('Nombre producto'));
        $form->text('sabor', __('Sabor'));
        $form->textarea('descripsion-producto', __('Descripsion producto'));
        $form->decimal('precio', __('Precio'));

        $form->image('image', __('Image'));

        return $form;

    }
}
