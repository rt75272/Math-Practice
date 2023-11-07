drop table if exists math_user_stats;

create table math_user_stats(
    id serial primary key,
    first_name char(50) not null,
    last_name char(50) not null,
    practice_date date default current_date 
);