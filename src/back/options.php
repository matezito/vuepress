<div class="wrap">
    <div class="container-admin">
        <h1>Paginas</h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th>Página raíz</th>
                    <td>
                        <select name="_vuepress_main_page" id="_vuepress_main_page">
                            <option value=""> -- seleccione -- </option>
                            <?php foreach (\Vue\Press\Back\VueOptions::get_pages() as $pages) : ?>
                                <option value="<?php echo $pages->ID ?>" <?php selected($pages->ID, get_option('_vuepress_main_page'), true) ?>><?php echo $pages->post_title ?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <button type="submit" name="vuesaveoptions" class="button button-primary">Guardar</button>
            </p>
        </form>
    </div>
    <div id="vuepress-admin"></div>
</div>
<style>
    .container-admin {
        width: 100%;
        border-bottom: 1px solid lightgray;
    }
</style>