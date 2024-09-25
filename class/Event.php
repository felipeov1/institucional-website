<?php

class Event {

    private $eventTable;
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
        $this->eventTable = 'events';
    }

    public function getEvents() {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->eventTable . " ORDER BY start_date desc");
        $stmt->execute();
        $result = $stmt->get_result();
        $events = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

       foreach ($events as &$event) {
            $event['formatted_dates'] = $this->formatDates($event['start_date'], $event['end_date']);
        }

        return $events;
    }

    private function formatDates($start_date, $end_date) {
       $startDay = date('d', strtotime($start_date));
        $endDay = date('d', strtotime($end_date));

        $monthNames = [
            1 => 'janeiro', 2 => 'fevereiro', 3 => 'março', 4 => 'abril',
            5 => 'maio', 6 => 'junho', 7 => 'julho', 8 => 'agosto',
            9 => 'setembro', 10 => 'outubro', 11 => 'novembro', 12 => 'dezembro'
        ];
        $startMonth = (int)date('n', strtotime($start_date));

        return [
            'date_range' => "$startDay - $endDay",
            'month' => $monthNames[$startMonth]
        ];
    }
}

