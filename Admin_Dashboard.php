<?php
$title = "Admin_Dashboard - Horizon Hub Agency";
include 'src/includes/header.inc.php';
include 'Kazi Majuu/includes/functions/config.inc.php';
ob_start();
?>

<div class="w-[95%] mx-auto mt-6">
    <h5 class="font-bold text-xl text-center mb-4">Registered Members</h5>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-left text-gray-700 border border-gray-300">
            <thead class="bg-gray-100 text-gray-800 uppercase">
            <tr>
                <th class="px-4 py-2 border">First Name</th>
                <th class="px-4 py-2 border">Last Name</th>
                <th class="px-4 py-2 border">Other Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Phone Number</th>
                <th class="px-4 py-2 border">National ID</th>
                <th class="px-4 py-2 border">Date Of Birth</th>
            </tr>
            </thead>
            <tbody class="w-[90%]">
            <?php
            $sql = "SELECT FirstName, LastName, OtherNames, Email, PhoneNo, NatinalId, Dob FROM users";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='hover:bg-gray-50 '>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['FirstName']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['LastName']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['OtherNames']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['Email']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['PhoneNo']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['NatinalId']) . "</td>";
                    echo "<td class='px-4 py-2 border'>" . htmlspecialchars($row['Dob']) . "</td>";
                    echo "</tr>";
                }

                $stmt->close();
            } else {
                echo "<tr><td colspan='7' class='text-red-600 px-4 py-2'>Error fetching data.</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'src/includes/app.inc.php';
// include 'src/includes/Footer.inc.php';
?>
