<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:31:35
  from 'C:\xampp\htdocs\Drops\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61649f27858543_25200701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5144a66d7e4078e95e1599127906a9d1216e7cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\product.tpl',
      1 => 1633984294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61649f27858543_25200701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</h1>
    <h2>Descripcion: <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</h2>
    <h2>Finalizada: <?php echo $_smarty_tpl->tpl_vars['product']->value->Precio;?>
</h2>
    <h2>Stock: 
    <?php if ($_smarty_tpl->tpl_vars['product']->value->Stock == 0) {?>
        No disponible
        <?php } else { ?>
            Disponible
    <?php }?></h2>

    <a class="btn btn-outline-light" href="home" > Volver </a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
