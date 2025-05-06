<?php include_once "./../../components/head.php"; ?>

<body>
    <main class="main-status">
        <div class="status-container">
            <div class="status-box">
                <?php include_once "./../../components/navbar.php"; ?>
                <?php include_once "./../../components/backButton.php"; ?>
                <div class="status-main-option">
                    <div class="status-main-box">

                        <div class="options-default-box-no-hover text-default-style">
                            <p>Temperature</p>
                            <svg class="script-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M480-80q-83 0-141.5-58.5T280-280q0-48 21-89.5t59-70.5v-320q0-50 35-85t85-35q50 0 85 35t35 85v320q38 29 59 70.5t21 89.5q0 83-58.5 141.5T480-80Zm-40-440h80v-40h-40v-40h40v-80h-40v-40h40v-40q0-17-11.5-28.5T480-800q-17 0-28.5 11.5T440-760v240Z" />
                            </svg>
                            <?php
                            $output = shell_exec("sensors | grep 'temp1:' | awk '{print $2}'");
                            if ($output) {
                                echo "<pre>" . trim($output) . "°C</pre>";
                            } else {
                                echo "Fail";
                            }
                            ?>

                        </div>

                        <div class="options-default-box-no-hover text-default-style">
                            <p>Free Ram</p>
                            <svg class="script-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M240-360h80v-240h-80v240Zm200 0h80v-240h-80v240Zm200 0h80v-240h-80v240Zm-480 80h640v-400H160v400Zm0 0v-400 400Zm40 160v-80h-40q-33 0-56.5-23.5T80-280v-400q0-33 23.5-56.5T160-760h40v-80h80v80h160v-80h80v80h160v-80h80v80h40q33 0 56.5 23.5T880-680v400q0 33-23.5 56.5T800-200h-40v80h-80v-80H520v80h-80v-80H280v80h-80Z" />
                            </svg>
                            <?php
                            $output2 = shell_exec("free -m | awk '/^Mem:/ { print $7 \" MB\" }'");
                            if ($output2) {
                                echo "<pre>$output2</pre>";
                            } else {
                                echo "Fail";
                            }
                            ?>
                        </div>

                        <div class="options-default-box-no-hover text-default-style">
                            <p>Free Space</p>
                            <svg class="script-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M160-280h640v-240H160v240Zm520-60q25 0 42.5-17.5T740-400q0-25-17.5-42.5T680-460q-25 0-42.5 17.5T620-400q0 25 17.5 42.5T680-340Zm200-260H767l-80-80H273l-80 80H80l137-137q11-11 25.5-17t30.5-6h414q16 0 30.5 6t25.5 17l137 137ZM160-200q-33 0-56.5-23.5T80-280v-320h800v320q0 33-23.5 56.5T800-200H160Z" />
                            </svg>
                            <?php
                            $output3 = shell_exec("df -h --output=avail / | tail -1");
                            if ($output3) {
                                echo "<pre>$output3</pre>";
                            } else {
                                echo "Fail";
                            }
                            ?>
                        </div>

                        <div class="options-default-box-no-hover text-default-style">
                            <p>Cpu Usage</p>
                            <svg class="script-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M360-360v-240h240v240H360Zm80-80h80v-80h-80v80Zm-80 320v-80h-80q-33 0-56.5-23.5T200-280v-80h-80v-80h80v-80h-80v-80h80v-80q0-33 23.5-56.5T280-760h80v-80h80v80h80v-80h80v80h80q33 0 56.5 23.5T760-680v80h80v80h-80v80h80v80h-80v80q0 33-23.5 56.5T680-200h-80v80h-80v-80h-80v80h-80Zm320-160v-400H280v400h400ZM480-480Z" />
                            </svg>
                            <?php
                            $output4 = shell_exec("top -bn1 | grep \"Cpu(s)\" | awk '{print 100 - $8 \"%\"}'");
                            if ($output4) {
                                echo "<pre>$output4</pre>";
                            } else {
                                echo "Fail";
                            }
                            ?>
                        </div>

                        <div class="options-default-box-no-hover text-default-style">
                            <p>Sys Uptime</p>
                            <svg class="script-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M480-120q-138 0-240.5-91.5T122-440h82q14 104 92.5 172T480-200q117 0 198.5-81.5T760-480q0-117-81.5-198.5T480-760q-69 0-129 32t-101 88h110v80H120v-240h80v94q51-64 124.5-99T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm112-192L440-464v-216h80v184l128 128-56 56Z" />
                            </svg>
                            <?php
                            $output5 = shell_exec("uptime -p");
                            if ($output5) {
                                echo "<pre>$output5</pre>";
                            } else {
                                echo "Fail";
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>