<?php defined('C5_EXECUTE') or die('Access denied.') ?>

<div class="form-group">
    <label for="img_width"><?= t('Width') ?></label>
    <input class="form-control" type="number" name="img_width" id="img_width" placeholder="Please enter the image's width." value=<?= $img_width ?>>
</div>

<div class="form-group">
    <label for="img_height"><?= t('Height') ?></label>
    <input class="form-control" type="number" name="img_height" id="img_height" placeholder="Please enter the image's height." value=<?= $img_height ?>>
</div>

<div class="form-group">
    <label for="img_text"><?= t('Text') ?></label>
    <textarea class="form-control" rows="4" name="img_text" id="img_text" placeholder="Please enter the image's text if any."><?= $img_text ?></textarea>
</div>

<div class="form-group">
    <label for="fg_color"><?= t('Foreground color') ?></label>
    <select class="form-control" id="fg_color" name="fg_color">
        <option value="1" <?php if ($fg_color == '1') { echo 'selected'; } ?>><?= t('White') ?></option>
        <option value="2" <?php if ($fg_color == '2') { echo 'selected'; } ?>><?= t('Black') ?></option>
    </select>
</div>

<div class="form-group">
    <label for="bg_color"><?= t('Background color') ?></label>
    <select class="form-control" id="bg_color" name="bg_color">
        <option value="1" <?php if ($bg_color == '1') { echo 'selected'; } ?>><?= t('Green') ?></option>
        <option value="2" <?php if ($bg_color == '2') { echo 'selected'; } ?>><?= t('Yellow') ?></option>
        <option value="3" <?php if ($bg_color == '3') { echo 'selected'; } ?>><?= t('Red') ?></option>
        <option value="4" <?php if ($bg_color == '4') { echo 'selected'; } ?>><?= t('Blue') ?></option>
        <option value="5" <?php if ($bg_color == '5') { echo 'selected'; } ?>><?= t('Grey') ?></option>
        <option value="6" <?php if ($bg_color == '6') { echo 'selected'; } ?>><?= t('Brown') ?></option>
        <option value="7" <?php if ($bg_color == '7') { echo 'selected'; } ?>><?= t('Black') ?></option>
        <option value="8" <?php if ($bg_color == '8') { echo 'selected'; } ?>><?= t('Purple') ?></option>
    </select>
</div>