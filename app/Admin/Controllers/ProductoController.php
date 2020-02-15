<?php

namespace App\Admin\Controllers;

use App\Producto;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductoController extends AdminController
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
        $grid->column('nombre-producto', __('Nombre'));
        $grid->column('sabor', __('Sabor'));
        $grid->column('descripsion-prducto', __('Descripsion'));
        $grid->column('preio', __('Precio'));
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
        $show->field('descripsion-prducto', __('Descripsion prducto'));
        $show->field('preio', __('Preio'));
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
        $form->textarea('descripsion-prducto', __('Descripsion prducto'));
        $form->decimal('preio', __('Preio'));

        return $form;
    }
}
