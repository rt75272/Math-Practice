create table math_user_stats(
    id serial primary key,
    name char(50) not null,
    num_questions_done int
);