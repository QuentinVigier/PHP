<!doctype html>
<html>
    <head>
        <title>{$titre}</title>
        {literal}
        <style>
            table.billets {
            font-size: 12px;
            }
            table.billets td {
            padding-bottom: 7px;
            }
            .entete {
            font-size: 14px;
            font-weight: bold;
            }
        </style>
        {/literal}
    </head>
    <body>
        <a href="index_blog.php">Mon blog</a>
        {if $categorie}
        <br>
        Catégorie : {$categorie}
        {/if}
        <br />
        <table class="billets">
            {section name=i loop=$billets}
                <tr>
                    <td>
                        <span class="entete">
                        <a href="affiche_blog.php?ID={$billets[i].ID}">{$billets[i].titre}</a>
                        </span>
                        <br/>
                        {$billets[i].date}<br />
                        {$billets[i].annonce}<br />
                        Catégorie : <a href="index_blog.php?categorie={$billets[i].param_cat}">
                        {$billets[i].categorie}
                        </a>
                    </td>
                </tr>
            {/section}
        </table>
    </body>
</html>