 <?php
 require_once "src/pingPong.php";

 class PongTest extends PHPUnit_Framework_TestCase
    {
        function test_Pingify()
        {
            $test_Pingify = new Pong;
            $input = 1;

            $result = $test_Pingify->pingify($input);

            $this->assertEquals(1 , $result[0]);
        }

        function test_Pingify_Three()
        {
            $test_Pingify = new Pong;
            $input = 3;

            $result = $test_Pingify->pingify($input);

            $this->assertEquals("Ping" , $result[2]);
        }

        function test_Pingify_Five()
        {
            $test_Pingify = new Pong;
            $input = 5;

            $result = $test_Pingify->pingify($input);

            $this->assertEquals("Pong" , $result[4]);
        }

        function test_Pingify_Fifteen()
        {
            $test_Pingify = new Pong;
            $input = 15;

            $result = $test_Pingify->pingify($input);

            $this->assertEquals("Ping-Pong" , $result[14]);
        }
    }




  ?>
