<?php

require_once '../models/Review.php';

class ReviewsController {
    public function index() {
        $reviews = new Review();
        if ($reviews->getAllReviews()) {
            return $reviews->getAllReviews();
        } else {
            return "No data found";
        }
    }
}