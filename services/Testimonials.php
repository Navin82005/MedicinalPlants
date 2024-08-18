<?php
$testimonials = [
    [
        "name" => "Lakshmi K.",
        "location" => "Chennai, Tamil Nadu",
        "testimonial" => "மூலிகைகள் பற்றிய தகவல்கள் இவ்வளவு விரிவாகவும் தெளிவாகவும் இங்கே கிடைப்பது மிகவும் பயனுள்ளதாக உள்ளது. இங்கே கூறப்பட்ட வைத்தியக் குறிப்புகள் என் குடும்பத்தாருக்கு மிகுந்த நன்மைகளை வழங்கியுள்ளது. நன்றி!",
        "rating" => 5,
        "image" => "img/testimonial-1.jpg"
    ],
    [
        "name" => "Rajesh R.",
        "location" => "Madurai, Tamil Nadu",
        "testimonial" => "இயற்கை மருத்துவம் குறித்து அறிய விரும்புபவர்களுக்கு இந்த வலைதளம் ஒரு பொக்கிஷம். நான் இங்கு கண்டவுடன், மூலிகை மருந்துகள் எவ்வாறு தயாரிக்க வேண்டும் என்பதைக் கற்றுக் கொண்டேன். இது என் ஆரோக்கியத்தை பெரிதும் மேம்படுத்தியுள்ளது.",
        "rating" => 4,
        "image" => "img/testimonial-2.jpg"
    ],
    [
        "name" => "Priya S.",
        "location" => "Coimbatore, Tamil Nadu",
        "testimonial" => "நான் அடிக்கடி சளி, காய்ச்சல் போன்ற பிரச்சினைகளால் அவதிப்படுவேன். இந்த வலைதளம் மூலமாக நான் பல பயனுள்ள மூலிகைகளை கண்டுபிடித்து பயன்படுத்தியதன் மூலம் என் ஆரோக்கியம் மெல்ல மெல்ல மேம்பட்டது. மிக மிக நன்றி!",
        "rating" => 5,
        "image" => "img/testimonial-3.jpg"
    ],
    [
        "name" => "Suresh V.",
        "location" => "Trichy, Tamil Nadu",
        "testimonial" => "இந்த வலைதளம் மூலமாக நான் கற்றது எவ்வளவோ. மூலிகைகளின் மருத்துவப் பயன்பாடுகள், தயாரிப்பு முறைகள், பக்கவிளைவுகள் என்று எளிதாகவும் தெளிவாகவும் விளக்கப்பட்டுள்ளது. இங்கு கற்றிருப்பது எனக்கு மற்றும் என் குடும்பத்திற்கு மிகவும் பயனுள்ளது.",
        "rating" => 4,
        "image" => "img/testimonial-4.jpg"
    ],
    [
        "name" => "Meena P.",
        "location" => "Thanjavur, Tamil Nadu",
        "testimonial" => "மூலிகைகள் பற்றிய எளிய மற்றும் தெளிவான விளக்கங்களும், வல்லுநர்களின் ஆலோசனைகளும் நிறைந்த வலைதளம். இயற்கை வைத்தியத்தில் ஆர்வமுள்ள அனைவருக்கும் இதை பரிந்துரைக்கிறேன். நன்றி!",
        "rating" => 5,
        "image" => "img/testimonial-5.jpg"
    ]
];

echo '<div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Our Testimonial</h4>
                <h1 class="display-5 mb-5 text-dark">எங்கள் வாடிக்கையாளர் கூறுவது!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">';

foreach ($testimonials as $testimonial) {
    echo '<div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
                <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                <div class="mb-4 pb-4 border-bottom border-secondary">
                    <p class="mb-0">' . $testimonial['testimonial'] . '</p>
                </div>
                <div class="d-flex align-items-center flex-nowrap">
                    <div class="bg-secondary rounded">
                        <img src="' . $testimonial['image'] . '" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                    </div>
                    <div class="ms-4 d-block">
                        <h4 class="text-dark">' . $testimonial['name'] . '</h4>
                        <p class="m-0 pb-3">' . $testimonial['location'] . '</p>
                        <div class="d-flex pe-5">';

    for ($i = 0; $i < 5; $i++) {
        if ($i < $testimonial['rating']) {
            echo '<i class="fas fa-star text-primary"></i>';
        } else {
            echo '<i class="fas fa-star"></i>';
        }
    }

    echo '          </div>
                    </div>
                </div>
            </div>
        </div>';
}

echo '  </div>
        </div>
    </div>';
