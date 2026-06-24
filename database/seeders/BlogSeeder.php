<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'ASYX Group Expands to East African Markets',
                'slug' => 'asyx-group-expands-to-east-african-markets',
                'excerpt' => 'We are excited to announce our expansion into Kenya, Uganda, and Rwanda with new offices and dedicated local teams.',
                'content' => '<p>We are excited to announce our expansion into Kenya, Uganda, and Rwanda with new offices and dedicated local teams.</p><p>ASYX Group has been at the forefront of ICT solutions in Tanzania for over a decade. With our proven track record in delivering enterprise-grade technology solutions, we are now bringing our expertise to the broader East African region.</p><p>Our new offices in Nairobi, Kampala, and Kigali will be staffed with certified engineers and sales teams who understand the local business landscape and regulatory requirements.</p><p>"This expansion represents a significant milestone for ASYX Group," said our CEO. "We have seen tremendous demand for our cybersecurity, smart city, and infrastructure solutions across East Africa. By establishing local presence, we can better serve our clients and partners."</p><p>Key services now available in East Africa include:</p><ul><li>Enterprise Cybersecurity Solutions</li><li>Smart City & IoT Implementation</li><li>ICT Infrastructure Deployment</li><li>Managed IT Services</li><li>Software Development</li></ul><p>For more information about our East Africa operations, please contact our regional offices or visit our website.</p>',
                'category' => 'Company News',
                'image' => '/122053.jpg',
                'author' => 'ASYX Communications Team',
                'published_at' => '2026-06-15',
            ],
            [
                'title' => 'Cybersecurity Trends Every Business Should Know in 2026',
                'slug' => 'cybersecurity-trends-every-business-should-know-2026',
                'excerpt' => 'From AI-powered threats to zero-trust architecture, discover the key cybersecurity trends shaping the future of business protection.',
                'content' => '<p>From AI-powered threats to zero-trust architecture, discover the key cybersecurity trends shaping the future of business protection.</p><p>The cybersecurity landscape is evolving at an unprecedented pace. In 2026, organizations across Africa face new challenges that require advanced defense strategies.</p><h3>1. AI-Powered Threats</h3><p>Attackers are now using artificial intelligence to create more sophisticated phishing campaigns, malware, and social engineering attacks. Businesses need AI-driven defense systems to match this threat level.</p><h3>2. Zero-Trust Architecture</h3><p>The traditional perimeter-based security model is no longer sufficient. Zero-trust assumes no user or device is trusted by default, requiring continuous verification.</p><h3>3. Supply Chain Security</h3><p>Third-party vendors and supply chains have become prime targets. Organizations must extend their security policies to cover all partners and suppliers.</p><h3>4. Cloud Security Posture Management</h3><p>As more businesses migrate to cloud environments, managing cloud security configurations and compliance becomes critical.</p><p>ASYX Group offers comprehensive cybersecurity assessments and implementations to help organizations stay protected against these evolving threats.</p>',
                'category' => 'Industry Insights',
                'image' => '/135034.jpg',
                'author' => 'John Mwakalinga, CTO',
                'published_at' => '2026-06-10',
            ],
            [
                'title' => 'Smart City Project Wins National Innovation Award',
                'slug' => 'smart-city-project-wins-national-innovation-award',
                'excerpt' => 'Our intelligent traffic management and connected public services project has been recognized with the National Innovation Award 2026.',
                'content' => '<p>Our intelligent traffic management and connected public services project has been recognized with the National Innovation Award 2026.</p><p>The project, implemented in partnership with the Ministry of Works and Transport, transformed urban mobility through IoT sensors, AI-powered traffic analytics, and a centralized city command center.</p><p>Key achievements of the project include:</p><ul><li>35% reduction in traffic congestion during peak hours</li><li>50% faster emergency response times</li><li>Real-time public transport tracking for citizens</li><li>Smart parking system reducing search time by 60%</li><li>Integrated waste management optimization</li></ul><p>"This award validates our commitment to using technology to solve real-world problems," said our Smart Technologies Director. "We look forward to replicating this success in other cities across Tanzania and East Africa."</p><p>The award was presented at the Tanzania ICT Summit held in Dar es Salaam, recognizing excellence in technology innovation and social impact.</p>',
                'category' => 'Projects',
                'image' => '/powerful-female-entrepreneur-focuses-strategic-planning.jpg',
                'author' => 'Dr. Sarah Kimaro',
                'published_at' => '2026-06-05',
            ],
            [
                'title' => 'Understanding Smart Meter Technology for Utilities',
                'slug' => 'understanding-smart-meter-technology-for-utilities',
                'excerpt' => 'Smart meters are revolutionizing how utility companies manage energy distribution and billing. Learn how they work and their benefits.',
                'content' => '<p>Smart meters are revolutionizing how utility companies manage energy distribution and billing. These advanced devices provide real-time data on energy consumption, enabling both utilities and consumers to make informed decisions.</p><h3>How Smart Meters Work</h3><p>Unlike traditional meters that require manual reading, smart meters automatically record and transmit energy usage data to the utility company. This enables:</p><ul><li>Real-time consumption monitoring</li><li>Remote disconnect/reconnect capability</li><li>Accurate billing without estimated readings</li><li>Detection of power outages and quality issues</li></ul><h3>Benefits for Utilities</h3><p>Utility companies gain operational efficiency through automated meter reading, reduced labor costs, and improved grid management through data analytics.</p><h3>Benefits for Consumers</h3><p>Consumers can track their usage patterns, receive alerts for unusual consumption, and participate in time-of-use pricing programs that reduce costs.</p><p>ASYX Group is a leading provider of smart metering solutions in Tanzania, having deployed over 50,000 meters for TANESCO and private energy providers.</p>',
                'category' => 'Technology',
                'image' => '/122053.jpg',
                'author' => 'Michael Omondi, Energy Solutions Lead',
                'published_at' => '2026-05-28',
            ],
            [
                'title' => 'The Future of E-Governance in Africa',
                'slug' => 'future-of-e-governance-in-africa',
                'excerpt' => 'Digital transformation of government services is accelerating across Africa. Explore the technologies driving this change.',
                'content' => '<p>Digital transformation of government services is accelerating across Africa. From digital identity systems to online tax filing, e-governance is reshaping how citizens interact with public institutions.</p><h3>Digital Identity Systems</h3><p>Many African countries are implementing biometric digital ID systems that streamline access to government services while reducing fraud and identity theft.</p><h3>Online Service Portals</h3><p>Citizen portals now allow for online application of licenses, permits, and certificates, reducing wait times from weeks to days.</p><h3>Open Data Initiatives</h3><p>Governments are increasingly publishing data sets that enable transparency and fuel innovation in the private sector.</p><p>ASYX Group has partnered with multiple government agencies to design and implement secure, scalable e-governance platforms that serve millions of citizens.</p>',
                'category' => 'Industry Insights',
                'image' => '/135034.jpg',
                'author' => 'Grace Mushi, Government Solutions',
                'published_at' => '2026-05-20',
            ],
            [
                'title' => '5 Steps to Secure Your Business Network',
                'slug' => '5-steps-to-secure-your-business-network',
                'excerpt' => 'A practical guide for SMEs and enterprises looking to strengthen their network security posture without breaking the budget.',
                'content' => '<p>Network security is a critical concern for businesses of all sizes. Here are five essential steps every organization should take to protect their digital assets.</p><h3>Step 1: Conduct a Security Audit</h3><p>Start by understanding your current vulnerabilities. A professional security audit identifies weak points in your network, endpoints, and policies.</p><h3>Step 2: Implement Network Segmentation</h3><p>Divide your network into zones to limit the spread of potential breaches. Critical systems should be isolated from general user networks.</p><h3>Step 3: Deploy Next-Generation Firewalls</h3><p>Modern firewalls do more than block traffic. They provide intrusion prevention, application control, and advanced threat detection.</p><h3>Step 4: Enforce Strong Authentication</h3><p>Multi-factor authentication should be mandatory for all systems. Password policies should require complexity and regular changes.</p><h3>Step 5: Maintain Regular Updates and Backups</h3><p>Keep all systems patched and maintain offline backups. Test your backup recovery process regularly.</p><p>ASYX Group provides comprehensive network security assessments and implementations tailored to your business needs.</p>',
                'category' => 'Security',
                'image' => '/powerful-female-entrepreneur-focuses-strategic-planning.jpg',
                'author' => 'Asha Said, Security Consultant',
                'published_at' => '2026-05-15',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
