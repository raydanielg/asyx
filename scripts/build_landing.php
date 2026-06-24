<?php
/**
 * Script to generate all landing page files for ASYX Group website
 */

$base = dirname(__DIR__);

function ensureDir(string $path): void {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

function writeFile(string $path, string $content): void {
    file_put_contents($path, $content);
    echo "Wrote: {$path}\n";
}

// Create directories
ensureDir("{$base}/lang/en");
ensureDir("{$base}/lang/sw");
ensureDir("{$base}/resources/views/partials");
ensureDir("{$base}/resources/views/layouts");
ensureDir("{$base}/public/images/partners");
ensureDir("{$base}/public/images/team");
ensureDir("{$base}/public/images/projects");
ensureDir("{$base}/public/images/products");
ensureDir("{$base}/public/images/certifications");

// ============================================================================
// ENGLISH LANGUAGE FILE
// ============================================================================
$en = <<<'PHP'
<?php

return [
    'company_name' => 'Asyx Group',

    // Top Bar
    'working_hours' => 'Mon - Fri: 8:00 AM - 6:00 PM',
    'quick_support' => 'Quick Support',

    // Navigation
    'nav_home' => 'Home',
    'nav_about' => 'About Us',
    'nav_services' => 'Services',
    'nav_solutions' => 'Solutions',
    'nav_industries' => 'Industries',
    'nav_projects' => 'Projects',
    'nav_hosting' => 'Hosting',
    'nav_careers' => 'Careers',
    'nav_blog' => 'Blog',
    'nav_contact' => 'Contact Us',
    'cta_get_quote' => 'Get Quote',

    // Hero
    'hero_headline' => 'Innovative Technology Solutions for a Smarter Tomorrow',
    'hero_description' => 'ASYX Group delivers cutting-edge ICT, cybersecurity, smart technologies, and infrastructure solutions that empower businesses and governments across Africa and beyond.',
    'hero_cta_primary' => 'Get Consultation',
    'hero_cta_secondary' => 'Explore Services',
    'hero_stats_projects' => 'Projects Completed',
    'hero_stats_clients' => 'Happy Clients',
    'hero_stats_countries' => 'Countries Served',
    'hero_stats_experience' => 'Years Experience',

    // Partners
    'partners_title' => 'Trusted by Leading Organizations',
    'partners_subtitle' => 'Our technology partners and certifications',

    // About
    'about_title' => 'About ASYX Group',
    'about_subtitle' => 'Your Trusted Technology Partner',
    'about_intro' => 'ASYX Group is a leading ICT and technology solutions provider dedicated to delivering innovative, secure, and scalable digital infrastructure. We specialize in cybersecurity, smart city technologies, software development, and enterprise ICT solutions.',
    'about_story' => 'Founded with a vision to bridge the technology gap in Africa, ASYX Group has grown into a trusted partner for governments, financial institutions, and enterprises. Our team of certified experts brings decades of combined experience in delivering world-class solutions.',
    'about_why_us' => 'Why Choose Us',
    'about_years_exp' => 'Years of Experience',
    'about_read_more' => 'Read More',

    // Vision Mission Values
    'vmv_title' => 'Our Vision, Mission & Values',
    'vision_title' => 'Our Vision',
    'vision_text' => 'To be Africa\'s leading technology solutions provider, driving digital transformation and innovation across industries.',
    'mission_title' => 'Our Mission',
    'mission_text' => 'To deliver world-class technology solutions that empower organizations to achieve excellence through innovation, security, and reliability.',
    'values_title' => 'Core Values',
    'value_integrity' => 'Integrity',
    'value_innovation' => 'Innovation',
    'value_excellence' => 'Excellence',
    'value_collaboration' => 'Collaboration',
    'value_customer_focus' => 'Customer Focus',

    // Statistics
    'stats_title' => 'Our Impact in Numbers',
    'stats_subtitle' => 'Delivering excellence across the continent',

    // Services
    'services_title' => 'Our Services',
    'services_subtitle' => 'Comprehensive technology solutions tailored to your needs',
    'service_smart_tech' => 'Smart Technologies',
    'service_smart_tech_desc' => 'IoT, AI, and automation solutions for modern enterprises.',
    'service_cyber' => 'Cyber Security',
    'service_cyber_desc' => 'Enterprise-grade security solutions to protect your digital assets.',
    'service_ict' => 'ICT Infrastructure',
    'service_ict_desc' => 'Design, deployment, and management of robust IT infrastructure.',
    'service_software' => 'Software Development',
    'service_software_desc' => 'Custom software solutions and enterprise applications.',
    'service_managed' => 'Managed Services',
    'service_managed_desc' => '24/7 IT support and managed service solutions.',
    'service_hardware' => 'Hardware Distribution',
    'service_hardware_desc' => 'Authorized distributor of world-class IT hardware.',

    // Solutions
    'solutions_title' => 'Featured Solutions',
    'solutions_subtitle' => 'Transforming industries with smart technology',
    'solution_smart_city' => 'Smart City Solutions',
    'solution_smart_energy' => 'Smart Energy Solutions',
    'solution_smart_transport' => 'Smart Transport Solutions',
    'solution_smart_security' => 'Smart Security Solutions',
    'solution_enterprise' => 'Enterprise Solutions',

    // Industries
    'industries_title' => 'Industries We Serve',
    'industries_subtitle' => 'Trusted across multiple sectors',
    'industry_gov' => 'Government',
    'industry_banking' => 'Banking & Finance',
    'industry_health' => 'Healthcare',
    'industry_edu' => 'Education',
    'industry_transport' => 'Transport',
    'industry_energy' => 'Energy & Utilities',
    'industry_telecom' => 'Telecommunications',
    'industry_ngo' => 'NGOs',

    // Products
    'products_title' => 'Products Showcase',
    'products_subtitle' => 'Industry-leading technology products',
    'product_security' => 'Security Products',
    'product_network' => 'Network Equipment',
    'product_servers' => 'Servers & Storage',
    'product_software' => 'Software Products',
    'product_cloud' => 'Cloud Solutions',

    // Why Choose Us
    'why_title' => 'Why Choose ASYX Group',
    'why_subtitle' => 'What sets us apart from the competition',
    'why_exp' => 'Extensive Experience',
    'why_certified' => 'Certified Experts',
    'why_support' => '24/7 Support',
    'why_security' => 'Security First',
    'why_local' => 'Local Presence',
    'why_global' => 'Global Standards',

    // Process
    'process_title' => 'How We Work',
    'process_subtitle' => 'Our proven methodology for delivering excellence',
    'step_consultation' => 'Consultation',
    'step_assessment' => 'Assessment',
    'step_design' => 'Design',
    'step_implementation' => 'Implementation',
    'step_testing' => 'Testing',
    'step_support' => 'Support',

    // Projects
    'projects_title' => 'Featured Projects',
    'projects_subtitle' => 'Recent success stories and case studies',
    'project_view' => 'View Case Study',

    // Sector Experience
    'sector_title' => 'Sector Experience',
    'sector_subtitle' => 'Deep expertise across key industries',
    'sector_energy' => 'Energy & Utilities',
    'sector_aviation' => 'Aviation',
    'sector_government' => 'Government',
    'sector_finance' => 'Financial Institutions',
    'sector_education' => 'Education',

    // Testimonials
    'testimonials_title' => 'What Our Clients Say',
    'testimonials_subtitle' => 'Real stories from satisfied partners',

    // Certifications
    'certifications_title' => 'Certifications & Compliance',
    'certifications_subtitle' => 'Meeting the highest industry standards',
    'cert_iso' => 'ISO Certifications',
    'cert_vendor' => 'Vendor Certifications',
    'cert_security' => 'Security Standards',
    'cert_compliance' => 'Compliance Standards',

    // Team
    'team_title' => 'Our Leadership Team',
    'team_subtitle' => 'Meet the experts behind our success',
    'team_leadership' => 'Leadership',
    'team_technical' => 'Technical Team',
    'team_advisory' => 'Advisory Board',

    // Tech Partners
    'tech_partners_title' => 'Technology Partners',
    'tech_partners_subtitle' => 'Collaborating with the world\'s leading technology companies',

    // News
    'news_title' => 'Latest News & Insights',
    'news_subtitle' => 'Stay updated with the latest from ASYX Group',
    'news_read_more' => 'Read More',

    // Careers
    'careers_title' => 'Join Our Team',
    'careers_subtitle' => 'Build your career with a leading technology company',
    'careers_positions' => 'Open Positions',
    'careers_benefits' => 'Benefits',
    'careers_internships' => 'Internships',

    // CTA
    'cta_title' => 'Ready to Transform Your Business?',
    'cta_description' => 'Let\'s discuss how ASYX Group can help you achieve your technology goals.',
    'cta_consultation' => 'Get Consultation',
    'cta_proposal' => 'Request Proposal',
    'cta_sales' => 'Contact Sales',

    // Contact
    'contact_title' => 'Get in Touch',
    'contact_subtitle' => 'We\'d love to hear from you',
    'contact_address' => 'Office Address',
    'contact_phone' => 'Phone',
    'contact_email' => 'Email',
    'contact_form_name' => 'Your Name',
    'contact_form_email' => 'Your Email',
    'contact_form_subject' => 'Subject',
    'contact_form_message' => 'Message',
    'contact_form_submit' => 'Send Message',

    // Newsletter
    'newsletter_title' => 'Subscribe to Our Newsletter',
    'newsletter_placeholder' => 'Enter your email',
    'newsletter_button' => 'Subscribe',

    // Footer
    'footer_company' => 'Company',
    'footer_solutions' => 'Solutions',
    'footer_resources' => 'Resources',
    'footer_legal' => 'Legal',
    'footer_social' => 'Follow Us',
    'footer_privacy' => 'Privacy Policy',
    'footer_terms' => 'Terms & Conditions',
    'footer_cookies' => 'Cookie Policy',
    'footer_copyright' => 'All Rights Reserved.',
    'footer_powered' => 'Powered by ASYX Group',

    // Language Switcher
    'lang_english' => 'English',
    'lang_swahili' => 'Swahili',
];
PHP;

// ============================================================================
// SWAHILI LANGUAGE FILE
// ============================================================================
$sw = <<<'PHP'
<?php

return [
    'company_name' => 'Asyx Group',

    // Top Bar
    'working_hours' => 'Jumatatu - Ijumaa: 8:00 AM - 6:00 PM',
    'quick_support' => 'Msaada wa Haraka',

    // Navigation
    'nav_home' => 'Nyumbani',
    'nav_about' => 'Kuhusu Sisi',
    'nav_services' => 'Huduma',
    'nav_solutions' => 'Suluhisho',
    'nav_industries' => 'Sekta',
    'nav_projects' => 'Miradi',
    'nav_hosting' => 'Hosting',
    'nav_careers' => 'Ajira',
    'nav_blog' => 'Blogu',
    'nav_contact' => 'Wasiliana Nasi',
    'cta_get_quote' => 'Pata Bei',

    // Hero
    'hero_headline' => 'Suluhisho za Teknolojia Bunifu kwa Kesho Bora Zaidi',
    'hero_description' => 'ASYX Group inatoa suluhisho za kisasa za ICT, usalama wa mtandao, teknolojia za kisasa, na miundombinu inayowezesha biashara na serikali barani Afrika na zaidi.',
    'hero_cta_primary' => 'Pata Mashauriano',
    'hero_cta_secondary' => 'Chunguza Huduma',
    'hero_stats_projects' => 'Miradi Iliyokamilika',
    'hero_stats_clients' => 'Wateja Wenye Furaha',
    'hero_stats_countries' => 'Nchi Zilizohudumiwa',
    'hero_stats_experience' => 'Miaka ya Uzoefu',

    // Partners
    'partners_title' => 'Wanaoaminiwa na Mashirika Makubwa',
    'partners_subtitle' => 'Washirika wetu wa teknolojia na vyeti',

    // About
    'about_title' => 'Kuhusu ASYX Group',
    'about_subtitle' => 'Mshirika Wako wa Teknolojia unaoweza Kuaminiwa',
    'about_intro' => 'ASYX Group ni mtoa huduma mkuu wa suluhisho za ICT na teknolojia anayejitegemea kutoa miundombinu ya dijiti iliyo ya kisasa, salama, na inayoweza kupanuka. Tunajishughulisha na usalama wa mtandao, teknolojia za jiji la kisasa, uundaji wa programu, na suluhisho za ICT za biashara.',
    'about_story' => 'Iliyoanzishwa kwa maono ya kujaza pengo la teknolojia barani Afrika, ASYX Group imekua kuwa mshirika anayeaminika wa serikali, taasisi za kifedha, na mashirika. Timu yetu ya wataalamu walio na vyeti inaleta miaka mingi ya uzoefu wa pamoja katika kutoa suluhisho za kiwango cha dunia.',
    'about_why_us' => 'Kwa Nini Kutuchagua',
    'about_years_exp' => 'Miaka ya Uzoefu',
    'about_read_more' => 'Soma Zaidi',

    // Vision Mission Values
    'vmv_title' => 'Maono Yetu, Dhamira na Maadili',
    'vision_title' => 'Maono Yetu',
    'vision_text' => 'Kuwa mtoa huduma mkuu wa suluhisho za teknolojia barani Afrika, akiongoza mabadiliko ya dijiti na ubunifu katika sekta mbalimbali.',
    'mission_title' => 'Dhamira Yetu',
    'mission_text' => 'Kutoa suluhisho za teknolojia za kiwango cha dunia zinazowawezesha mashirika kufanikiwa kupitia ubunifu, usalama, na uimara.',
    'values_title' => 'Maadili Yetu',
    'value_integrity' => 'Uadilifu',
    'value_innovation' => 'Ubunifu',
    'value_excellence' => 'Ubora',
    'value_collaboration' => 'Ushirikiano',
    'value_customer_focus' => 'Kuzingatia Mteja',

    // Statistics
    'stats_title' => 'Athari Yetu kwa Nambari',
    'stats_subtitle' => 'Kutoa ubora barani Afrika',

    // Services
    'services_title' => 'Huduma Zetu',
    'services_subtitle' => 'Suluhisho za teknolojia zilizobinafsishwa kwa mahitaji yako',
    'service_smart_tech' => 'Teknolojia za Kisasa',
    'service_smart_tech_desc' => 'Suluhisho za IoT, AI, na otomasi kwa mashirika ya kisasa.',
    'service_cyber' => 'Usalama wa Mtandao',
    'service_cyber_desc' => 'Suluhisho za usalama za kiwango cha biashara kulinda mali yako za dijiti.',
    'service_ict' => 'Miundombinu ya ICT',
    'service_ict_desc' => 'Kubuni, kutekeleza, na kusimamia miundombinu thabiti ya IT.',
    'service_software' => 'Uundaji wa Programu',
    'service_software_desc' => 'Suluhisho za programu maalum na programu za biashara.',
    'service_managed' => 'Huduma Zilizosimamiwa',
    'service_managed_desc' => 'Msaada wa IT wa masaa 24/7 na suluhisho za huduma zilizosimamiwa.',
    'service_hardware' => 'Usambazaji wa Vifaa',
    'service_hardware_desc' => 'Msambazaji muidhinishi wa vifaa bora vya IT vya kimataifa.',

    // Solutions
    'solutions_title' => 'Suluhisho Zilizoangaziwa',
    'solutions_subtitle' => 'Kubadilisha sekta kwa teknolojia ya kisasa',
    'solution_smart_city' => 'Suluhisho za Jiji la Kisasa',
    'solution_smart_energy' => 'Suluhisho za Nishati ya Kisasa',
    'solution_smart_transport' => 'Suluhisho za Usafiri wa Kisasa',
    'solution_smart_security' => 'Suluhisho za Usalama wa Kisasa',
    'solution_enterprise' => 'Suluhisho za Biashara',

    // Industries
    'industries_title' => 'Sekta Tunazohudumia',
    'industries_subtitle' => 'Tunaaminiwa katika sekta mbalimbali',
    'industry_gov' => 'Serikali',
    'industry_banking' => 'Benki na Fedha',
    'industry_health' => 'Afya',
    'industry_edu' => 'Elimu',
    'industry_transport' => 'Usafirishaji',
    'industry_energy' => 'Nishati na Huduma',
    'industry_telecom' => 'Mawasiliano',
    'industry_ngo' => 'Mashirika Yasiyo ya Kiserikali',

    // Products
    'products_title' => 'Onyesho la Bidhaa',
    'products_subtitle' => 'Bidhaa bora za teknolojia katika tasnia',
    'product_security' => 'Bidhaa za Usalama',
    'product_network' => 'Vifaa vya Mtandao',
    'product_servers' => 'Seva na Hifadhi',
    'product_software' => 'Bidhaa za Programu',
    'product_cloud' => 'Suluhisho za Wingu',

    // Why Choose Us
    'why_title' => 'Kwa Nini Kuchagua ASYX Group',
    'why_subtitle' => 'Kitu gani kinitenganisha na washindani',
    'why_exp' => 'Uzoefu Mkubwa',
    'why_certified' => 'Wataalamu Waliothibitishwa',
    'why_support' => 'Msaada wa Masaa 24/7',
    'why_security' => 'Usalama Kwanza',
    'why_local' => 'Uwepo wa Karibu',
    'why_global' => 'Viwango vya Kimataifa',

    // Process
    'process_title' => 'Jinsi Tunavyofanya Kazi',
    'process_subtitle' => 'Mbinu yetu iliyothibitishwa ya kutoa ubora',
    'step_consultation' => 'Mashauriano',
    'step_assessment' => 'Tathmini',
    'step_design' => 'Kubuni',
    'step_implementation' => 'Utekelezaji',
    'step_testing' => 'Kupima',
    'step_support' => 'Msaada',

    // Projects
    'projects_title' => 'Miradi Iliyoangaziwa',
    'projects_subtitle' => 'Hadithi za mafanikio ya hivi karibuni',
    'project_view' => 'Tazama Kesi',

    // Sector Experience
    'sector_title' => 'Uzoefu wa Sekta',
    'sector_subtitle' => 'Utaalamu wa kina katika sekta muhimu',
    'sector_energy' => 'Nishati na Huduma',
    'sector_aviation' => 'Usafiri wa Angani',
    'sector_government' => 'Serikali',
    'sector_finance' => 'Taasisi za Kifedha',
    'sector_education' => 'Elimu',

    // Testimonials
    'testimonials_title' => 'Wateja Wetu Wanachosema',
    'testimonials_subtitle' => 'Hadithi za kweli kutoka kwa washindani wenye furaha',

    // Certifications
    'certifications_title' => 'Vyeti na Kufuatana',
    'certifications_subtitle' => 'Kukutana na viwango vya juu vya tasnia',
    'cert_iso' => 'Vyeti vya ISO',
    'cert_vendor' => 'Vyeti vya Muuzaji',
    'cert_security' => 'Viwango vya Usalama',
    'cert_compliance' => 'Viwango vya Kufuatana',

    // Team
    'team_title' => 'Timu Yetu ya Uongozi',
    'team_subtitle' => 'Kutana na wataalamu nyuma ya mafanikio yetu',
    'team_leadership' => 'Uongozi',
    'team_technical' => 'Timu ya Kiufundi',
    'team_advisory' => 'Bodi ya Washauri',

    // Tech Partners
    'tech_partners_title' => 'Washirika wa Teknolojia',
    'tech_partners_subtitle' => 'Kushirikiana na makampuni ya teknolojia bora duniani',

    // News
    'news_title' => 'Habari na Uchanganuzi Mpya',
    'news_subtitle' => 'Kaa updated na habari mpya kutoka ASYX Group',
    'news_read_more' => 'Soma Zaidi',

    // Careers
    'careers_title' => 'Jiunge na Timu Yetu',
    'careers_subtitle' => 'Jenga kazi yako na kampuni bora ya teknolojia',
    'careers_positions' => 'Nafasi Zilizo Wazi',
    'careers_benefits' => 'Faida',
    'careers_internships' => 'Maafisa',

    // CTA
    'cta_title' => 'Uko Tayari Kubadilisha Biashara Yako?',
    'cta_description' => 'Hebu tujadiliane jinsi ASYX Group inaweza kukusaidia kufikia malengo yako ya teknolojia.',
    'cta_consultation' => 'Pata Mashauriano',
    'cta_proposal' => 'Omba Mapendekezo',
    'cta_sales' => 'Wasiliana na Mauzo',

    // Contact
    'contact_title' => 'Wasiliana Nasi',
    'contact_subtitle' => 'Tunapenda kuskia kutoka kwako',
    'contact_address' => 'Anwani ya Ofisi',
    'contact_phone' => 'Simu',
    'contact_email' => 'Barua pepe',
    'contact_form_name' => 'Jina Lako',
    'contact_form_email' => 'Barua pepe Yako',
    'contact_form_subject' => 'Mada',
    'contact_form_message' => 'Ujumbe',
    'contact_form_submit' => 'Tuma Ujumbe',

    // Newsletter
    'newsletter_title' => 'Jiunge na Jarida Letu',
    'newsletter_placeholder' => 'Weka barua pepe yako',
    'newsletter_button' => 'Jiunge',

    // Footer
    'footer_company' => 'Kampuni',
    'footer_solutions' => 'Suluhisho',
    'footer_resources' => 'Rasilimali',
    'footer_legal' => 'Kisheria',
    'footer_social' => 'Tufuatilie',
    'footer_privacy' => 'Sera ya Faragha',
    'footer_terms' => 'Masharti na Masharti',
    'footer_cookies' => 'Sera ya Vidakuzi',
    'footer_copyright' => 'Haki Zote Zimehifadhiwa.',
    'footer_powered' => 'Inaendeshwa na ASYX Group',

    // Language Switcher
    'lang_english' => 'Kiingereza',
    'lang_swahili' => 'Kiswahili',
];
PHP;

// Write language files
writeFile("{$base}/lang/en/landing.php", $en);
writeFile("{$base}/lang/sw/landing.php", $sw);

echo "\nDone! Created: lang/en/landing.php and lang/sw/landing.php\n";
