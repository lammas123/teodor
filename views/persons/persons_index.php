<h1>Persons</h1>
<ul class="list-group">
    <? foreach ($persons as $person): ?>
        <li class="list-group-item"><a
                href="persons/view/<?= $person['person_id'] ?>/<?= $person['username'] ?>"><?= $person['username'] ?></a></li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Add new person</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Username</th>
                <td><input type="text" name="data[username]" placeholder="Jaan"/></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="data[password]" placeholder="******"/></td>
            </tr>
            <tr>
                <th>Active</th>
                <td><input type="checkbox"
                           name="data[active]" checked="checked"/>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="data[email]" placeholder="em@ail.ee">
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
