UPDATE wp_ab78uf_term_taxonomy SET taxonomy = 'curso_tax' where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873, 906,907,908));
UPDATE `wp_ab78uf_posts`set post_type = 'cursos' where ID in (SELECT object_id FROM `wp_ab78uf_term_relationships` where term_taxonomy_id in (SELECT term_taxonomy_id FROM `wp_ab78uf_term_taxonomy` where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873, 906,907,908))));

UPDATE `wp_ab78uf_term_taxonomy` SET parent = 0 where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873, 906,907,908));
DELETE FROM `wp_ab78uf_term_relationships` where term_taxonomy_id in ( SELECT term_taxonomy_id FROM `wp_ab78uf_term_taxonomy` where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873)) );
DELETE FROM `wp_ab78uf_term_taxonomy` where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873))
DELETE FROM `wp_ab78uf_term_taxonomy` where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (873))
DELETE FROM `wp_ab78uf_terms` where term_id in (873)


UPDATE `wp_ab78uf_posts`set post_type = 'podcasts' where ID in (SELECT object_id FROM `wp_ab78uf_term_relationships` where term_taxonomy_id in (SELECT term_taxonomy_id FROM `wp_ab78uf_term_taxonomy` where term_id in (SELECT term_id FROM `wp_ab78uf_terms` where term_id in (685))));

