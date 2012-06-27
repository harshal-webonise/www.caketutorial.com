<div class ="users form">
<table>
    <caption>

    </caption>
<tr>

    <?php echo $this->Html->link('Login', '/users/login', array('action' => 'login')); ?>

</tr>
<br />
    <tr>

        <?php echo $this->Html->link('Add New User to your database', '/users/add', array('action' => 'add')); ?>

    </tr>
</table>
</div>