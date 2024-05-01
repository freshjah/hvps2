<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name'=>'Guest Services',
            'description'=>'<p>In the ever-changing hospitality and tourist sector of today, giving guests an outstanding experience is crucial. Key components of operational excellence and customer service are covered in the units on facilitating access to external services, promoting and upselling goods and services, and providing customized guest services. The following topics are covered throughout the module and so the learning resources are developed to cover these topics:</p>
            <ul class="list-disc"><li>Facilitate access to external services&nbsp;</li><li>Promote and up-sell products and services to guests&nbsp;</li><li>Provide customized guests service</li></ul>
            <p>Experts in this area get knowledge on how to efficiently promote offerings, create external connections, and provide guests with individualized services that go above and beyond their expectations. People in these positions are essential to raising client satisfaction and boosting revenue development since they do everything from booking reservation and organizing services to marketing extra facilities and deftly responding to requests from guests. Hospitality workers can create memorable experiences that encourage loyalty and contribute to the success of their businesses by remaining abreast of industry developments, improving communication skills, and giving guests\' demands top priority. ​</p>'
        ]);

        Service::create([
            'name'=>'Reception & Reservation Services',
            'description'=>'<p>This module provides a comprehensive overview of guest service management in the hospitality industry, covering essential tasks from customer arrival to departure. The following topics are covered throughout the module and so the learning resources are developed to cover these topics:</p>
            <ul class="list-disc"><li>Maintain guests’ accounts </li><li>Prepare customer accounts and deal with departures</li><li>Process cash and non-cash transactions&nbsp;</li><li>Receive and process reservations</li></ul>
            <p>Learning resources are developed to allow participants to acquire crucial skills in financial transaction processing, including posting charges, settling accounts, and maintaining accurate records. The learning resources also explores arrival and departure services, such as guest registration and front office operations like updating accounts and generating reports. Through these learning resources, learners will be able to develop their proficiency in reservation management, from receiving requests to advising stakeholders. Tailored for those in front office roles in commercial accommodations, these resources outline exceptional customer service and ensuring operational efficiency.</p>'
        ]);

        Service::create([
            'name'=>'Booking Services Coordination',
            'description'=>'<p>This module focuses on the knowledge, skills and attitudes necessary to complete the guest cycle within the Hospital industry. The following topics are covered throughout the module and so the learning resources are developed to cover these topics:</p>
            <ul class="list-disc"><li>Coordinate Reservation and Booking Systems</li><li>Provide Accommodation Reception Services&nbsp;</li><li>Supervise Front Desk Operations</li></ul>
            <p>The learning resources were developed to provide learners with an understand and practical knowledge & skills in coordinating the reservations process, providing accommodation reception services (check in and guest services) and supervising the operations of the front desk. The resources will also emphasize guest satisfaction, resolving guest complaints, managing conflict and monitoring staff performance.</p>'
        ]);

        Service::create([
            'name'=>'Front Office Services',
            'description'=>'<p>This module covers a range of topics in the hotel industry related to the efficient and effective management of the front desk and reception areas in the hospitality industry. The following topics are covered throughout the module and so the learning resources are developed to cover these topics: </p>
            <ul class="list-disc"><li>Manage Front Office and Guest Relation Services </li><li>Create and maintain customer–centric service orientation&nbsp;</li><li>Monitor quality service delivery to customers&nbsp;</li><li>Identify&nbsp;opportunities to&nbsp;maintain&nbsp;and increase revenue&nbsp;</li><li>Apply protocol guidelines to events and functions&nbsp;</li></ul>
            <p>The learning resources developed for this module will expose learners to the customs of the service industry in areas that will require them to create opportunities to maintain and increase revenue, monitor quality service delivery to customers.</p>'
        ]);

    }
}
