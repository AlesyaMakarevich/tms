SELECT l.id, c.title AS course_title, l.title , l.description FROM courses AS c JOIN lessons AS l ON c.id = l.course_id;
SELECT s.id, c.title, c.start_date, c.end_date,  s.name, s.phone, s.country FROM `courses` AS c JOIN course_student as cs on cs.course_id = c.id JOIN students AS s ON s.id = cs.student_id;
