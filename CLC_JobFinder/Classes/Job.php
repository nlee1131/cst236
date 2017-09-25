<?php
include "Database.php";
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/21/17
 * Time: 2:57 PM
 */
class Job
{
    private $name;
    private $description;
    private $contact;
    private $db;

    /**
     * Job constructor.
     * @param $name
     * @param $description
     * @param $contact
     */
    public function __construct($name, $description, $contact)
    {
        $this->name = $name;
        $this->description = $description;
        $this->contact = $contact;
        $this->db = new Database();
    }


    public function listJobs()
    {
        ?>

        <table>


            <?php
            //$sql = "SELECT JOB_ID, JOB_NAME FROM jobs";
            //$result = $this->db->query($sql);
            $this->db->getJobs();
            $result = $this->db->getJobs();
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td>
                        <a href="../PHP_Files/jobDescription.php?id=<?=$row["ID"]?>"><?=$row["JOB_NAME"]?></a>
                    </td>
                </tr>
                <?php
            }
            //$this->db->close();
            ?>


        </table>
        <?php
    }


}