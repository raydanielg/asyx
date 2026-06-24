<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [
            [
                'title' => 'Senior Cybersecurity Engineer',
                'slug' => 'senior-cybersecurity-engineer',
                'department' => 'Security',
                'location' => 'Dar es Salaam, Tanzania',
                'type' => 'Full-time',
                'description' => 'We are seeking an experienced Cybersecurity Engineer to lead our security operations and implement enterprise-grade security solutions for our clients across East Africa.',
                'requirements' => "<ul><li>Bachelor's degree in Computer Science, IT, or related field</li><li>5+ years experience in cybersecurity</li><li>Certifications: CISSP, CEH, or equivalent</li><li>Experience with SIEM, firewalls, and endpoint protection</li><li>Strong knowledge of network security and cloud security</li><li>Excellent problem-solving and communication skills</li></ul>",
                'responsibilities' => "<ul><li>Design and implement security architectures for enterprise clients</li><li>Conduct security audits and vulnerability assessments</li><li>Manage SOC operations and incident response</li><li>Lead security awareness training programs</li><li>Stay current with emerging threats and security technologies</li></ul>",
                'deadline' => '2026-07-30',
                'is_active' => true,
            ],
            [
                'title' => 'ICT Infrastructure Specialist',
                'slug' => 'ict-infrastructure-specialist',
                'department' => 'Infrastructure',
                'location' => 'Dar es Salaam, Tanzania',
                'type' => 'Full-time',
                'description' => 'Join our infrastructure team to design, deploy, and maintain cutting-edge network and server solutions for enterprise and government clients.',
                'requirements' => "<ul><li>Bachelor's degree in Network Engineering or related field</li><li>3+ years experience in network and server administration</li><li>Certifications: CCNA, CCNP, or equivalent</li><li>Experience with Cisco, HP, and Dell enterprise equipment</li><li>Knowledge of virtualization technologies (VMware, Hyper-V)</li><li>Strong troubleshooting and documentation skills</li></ul>",
                'responsibilities' => "<ul><li>Design and implement network infrastructure solutions</li><li>Configure and manage enterprise routers, switches, and firewalls</li><li>Deploy and maintain server and storage systems</li><li>Monitor network performance and resolve issues</li><li>Provide technical support to clients</li></ul>",
                'deadline' => '2026-07-15',
                'is_active' => true,
            ],
            [
                'title' => 'Software Developer',
                'slug' => 'software-developer',
                'department' => 'Development',
                'location' => 'Dar es Salaam, Tanzania',
                'type' => 'Full-time',
                'description' => 'We are looking for a talented Software Developer to build custom web and mobile applications for our diverse client base.',
                'requirements' => "<ul><li>Bachelor's degree in Computer Science or Software Engineering</li><li>2+ years experience in full-stack development</li><li>Proficient in PHP/Laravel, JavaScript, and modern frameworks</li><li>Experience with database design (MySQL, PostgreSQL)</li><li>Knowledge of RESTful API development</li><li>Understanding of DevOps and CI/CD pipelines</li></ul>",
                'responsibilities' => "<ul><li>Develop and maintain web applications and APIs</li><li>Collaborate with clients to understand requirements</li><li>Write clean, maintainable, and well-documented code</li><li>Participate in code reviews and team meetings</li><li>Stay updated with emerging technologies and best practices</li></ul>",
                'deadline' => '2026-08-01',
                'is_active' => true,
            ],
            [
                'title' => 'Sales & Business Development Manager',
                'slug' => 'sales-business-development-manager',
                'department' => 'Sales',
                'location' => 'Dar es Salaam, Tanzania',
                'type' => 'Full-time',
                'description' => 'Drive revenue growth by identifying new business opportunities and building lasting relationships with enterprise clients in Tanzania and East Africa.',
                'requirements' => "<ul><li>Bachelor's degree in Business, Marketing, or related field</li><li>4+ years experience in B2B technology sales</li><li>Proven track record of meeting sales targets</li><li>Strong understanding of IT/ICT solutions</li><li>Excellent negotiation and presentation skills</li><li>Experience in government and enterprise sales preferred</li></ul>",
                'responsibilities' => "<ul><li>Identify and pursue new business opportunities</li><li>Build and maintain relationships with key clients</li><li>Prepare proposals and conduct product demonstrations</li><li>Meet or exceed monthly and quarterly sales targets</li><li>Collaborate with technical teams on client solutions</li></ul>",
                'deadline' => '2026-07-20',
                'is_active' => true,
            ],
            [
                'title' => 'IT Support Technician (Internship)',
                'slug' => 'it-support-technician-internship',
                'department' => 'Support',
                'location' => 'Dar es Salaam, Tanzania',
                'type' => 'Internship',
                'description' => 'Great opportunity for fresh graduates to gain hands-on experience in enterprise IT support and managed services.',
                'requirements' => "<ul><li>Diploma or Bachelor's degree in IT, Computer Science, or related field</li><li>Basic knowledge of Windows and Linux systems</li><li>Understanding of networking fundamentals</li><li>Strong communication and customer service skills</li><li>Eager to learn and grow in a fast-paced environment</li></ul>",
                'responsibilities' => "<ul><li>Provide first-level technical support to clients</li><li>Log and track support tickets in the helpdesk system</li><li>Assist senior engineers with system maintenance</li><li>Document troubleshooting procedures</li><li>Participate in training and knowledge-sharing sessions</li></ul>",
                'deadline' => '2026-07-10',
                'is_active' => true,
            ],
        ];

        foreach ($careers as $career) {
            Career::create($career);
        }
    }
}
