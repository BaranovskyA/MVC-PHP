<?php
/* Smarty version 3.1.36, created on 2020-05-24 19:36:26
  from 'W:\domains\mvc.loc\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecaa28a675b54_36951128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46cd257cd6a4368da53f4531401b50705329062' => 
    array (
      0 => 'W:\\domains\\mvc.loc\\views\\index.tpl',
      1 => 1590338184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecaa28a675b54_36951128 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../index.css" media="all" />

<form action="/books"  method="POST">
    <div class="form-div">
        <input class="flex-item" type="text" name="name" placeholder="Название...">
        <input class="flex-item" type="text" name="author" placeholder="Автор...">
        <button class="flex-item">Добавить</button>
    </div>
</form>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['book']->value->author;?>
, "<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
"
            <form action="/books/delete/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
" method="POST">
                <button>Удалить</button>
            </form>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
