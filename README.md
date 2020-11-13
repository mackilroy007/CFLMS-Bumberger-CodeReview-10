# CFLMS-Bumberger-CodeReview-10

INSERT INTO media (title, img, FK_ID_A, ISBN, description, publish_date, FK_ID_P, type, state)
    VALUES ('Harry Potter and the Philosopher Stone',
            'https://images-na.ssl-images-amazon.com/images/I/81YOuOGFCJL.jpg',
            (SELECT MAX(ID_A) FROM author), 
            9781551923987,
            'Harry Potter and the Philosophers Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowlings debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harrys parents, but failed to kill Harry when he was just 15 months old.',
            '1997-06-26',
            (SELECT MAX(ID_P) FROM publisher),
            'book',
            'available')

$sql = "INSERT INTO media (title, img, FK_ID_A, ISBN, description, publish_date, FK_ID_P, type, state) 
   VALUES ('$title', '$img', (SELECT MAX(ID_A) FROM author), '$ISBN', '$description', '$date', (SELECT MAX(ID_P) FROM publisher), '$type', '$state')";

SELECT MAX(ID_A) FROM author;

$var = "01-01-10";
function checkdate(){
    if("Condition"){
        $GLOBALS['var'] = "01-01-11";
    }
}
checkdate();

select for display, index
SELECT ID_M, title, img, author.fName AS name, author.surname, ISBN, description, publish_date, publisher.name, publisher.address, publisher.size, type, state FROM media
INNER JOIN author on media.FK_ID_A = author.ID_A
INNER JOIN publisher on media.FK_ID_P = publisher.ID_P

update action:
UPDATE media
INNER JOIN author on media.FK_ID_A = author.ID_A
INNER JOIN publisher on media.FK_ID_P = publisher.ID_P
SET media.title = '555555', media.img ="test", author.fName ="test", author.surname= "test", media.ISBN= "1234", media.description = "notnow", media.publish_date ="2020-12-01", publisher.name="no", publisher.address="asdfads", publisher.size="small", media.type="DVD", media.state="reserved"
WHERE media.ID_M = 1

does not seem to work
DELETE media, author, publisher FROM media 
INNER JOIN author on media.ID_M = author.ID_A
INNER JOIN publisher on media.ID_M = publisher.ID_P
   WHERE media.ID_M = 1