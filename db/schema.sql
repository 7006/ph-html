create table products (
  product_id serial primary key,
  product_name varchar not null,
  review_count int,
  alternative_count int,
  product_description text,
  last_review text,
  last_review_author_avatar_url varchar,
  product_logo_url varchar not null
);