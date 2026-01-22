<?php
declare(strict_types=1);

class DB {
    private static ?mysqli $conn = null;

    public static function conn(): mysqli {
        if (self::$conn === null) {
            // ✅ show real SQL errors (helps debugging)
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $host = "localhost";
            $user = "root";
            $pass = "";
            $db   = "aiub_portal";

            $mysqli = new mysqli($host, $user, $pass, $db);
            $mysqli->set_charset("utf8mb4");
            self::$conn = $mysqli;
        }
        return self::$conn;
    }

    public static function select(string $sql, string $types = "", array $params = []): array {
        $stmt = self::conn()->prepare($sql);

        if ($types !== "" && !empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $res = $stmt->get_result();
        $rows = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
        $stmt->close();
        return $rows;
    }

    public static function exec(string $sql, string $types = "", array $params = []): int {
        $stmt = self::conn()->prepare($sql);

        if ($types !== "" && !empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $affected = $stmt->affected_rows;
        $stmt->close();
        return $affected;
    }
}
