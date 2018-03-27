    <form action="<?= URL ?>kalender/createAction" method="post">
        <input type="text" name="person" required="" placeholder="name">
        <input type="number" min="1" max="32" required="" name="day" placeholder="day">
        <input type="number" min="1" max="12" required="" name="month" placeholder="month">
        <input type="number" min="1900" max="<?php echo date('Y'); ?>" required="" name="year" placeholder="year">
        <input type="submit" name="submit" value="Add birthday">
    </form>