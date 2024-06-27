<?php
class Student {
    private $name;
    private $age;
    private $grade;
    private $email;

    public function __construct($name, $age, $grade, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>


<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<h1>Student Information Form</h1>
<form method="POST" action="index.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <button type="submit">Add Student</button>
</form>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the form fields are 'name', 'age', 'grade', and 'email'
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];

    // Create a new Student object
    $student = new Student($name, $age, $grade, $email);

    // Initialize the students array in session if not already initialized
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = [];
    }

    // Append the new student to the session array
    $_SESSION['students'][] = $student;
}

if (!empty($_SESSION['students'])): ?>
    <h2>Student List</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Email</th>
        </tr>
        <?php foreach ($_SESSION['students'] as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student->getName()); ?></td>
                <td><?php echo htmlspecialchars($student->getAge()); ?></td>
                <td><?php echo htmlspecialchars($student->getGrade()); ?></td>
                <td><?php echo htmlspecialchars($student->getEmail()); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>