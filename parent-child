with recursive `laravel_cte` as (
    (select *, 0 as `depth`, cast(`id` as char(65535)) as `path` from `menu_items` where `parent_id` is null) 
    union all 
    (select `menu_items`.*, `depth` + 1 as `depth`, concat(`path`, '.', `menu_items`.`id`) from `menu_items` inner join `laravel_cte` on `laravel_cte`.`id` = `menu_items`.`parent_id`)
) select * from `laravel_cte`
