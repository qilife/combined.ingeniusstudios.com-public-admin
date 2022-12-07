<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class QuantumAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Quantum I

        $album = Album::create(['order' => 0, 'category_id' => 1,
            'name' => 'Sound of the Sun (DNA Repair and Healing)', 'audio_folder' => '01. Sound of the Sun (DNA Repair and Healing)', 'image' => 'SoundoftheSun-2.jpg',
            'benefits' => '["Boost heart chakra", "DNA Activation", "Water restructuring", "EMF Protection"]',
        ]);
        $album->tags()->attach([3, 4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. 100% Speed - Sound of the Sun', 'filename' => '01. 100% Speed - Sound of the Sun.mp3'],
            ['name' => '02. 50% Speed - Sound of the Sun', 'filename' => '02. 50% Speed - Sound of the Sun.mp3'],
            ['name' => '03. 25% Speed - Sound of the Sun', 'filename' => '03. 25% Speed - Sound of the Sun.mp3'],
            ['name' => '04. 15% Speed - Sound of the Sun', 'filename' => '04. 15% Speed - Sound of the Sun.mp3'],
        ]);

        $album = Album::create(['order' => 10, 'category_id' => 1,
            'name' => '9 Planets Plus', 'audio_folder' => '06. 9 Planets Plus', 'image' => '9PlanetsPlus-2.jpg',
            'benefits' => '["Get health and focus boost", "Get Love, Forgiveness, Acceptance, Gentleness, Nurture", "Feel Energized, remove fatigue", "Sleep better, feel rested, recharged, recovered", "Get ultra relaxation and healing", "Balance your chakras"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Mercury', 'filename' => '01. Mercury.mp3'],
            ['name' => '02. Venus', 'filename' => '02. Venus.mp3'],
            ['name' => '03. Earth', 'filename' => '03. Earth.mp3'],
            ['name' => '04. Mars', 'filename' => '04. Mars.mp3'],
            ['name' => '05. Jupiter', 'filename' => '05. Jupiter.mp3'],
            ['name' => '06. Saturn', 'filename' => '06. Saturn.mp3'],
            ['name' => '07. Neptune', 'filename' => '07. Neptune.mp3'],
            ['name' => '08. Uranus', 'filename' => '08. Uranus.mp3'],
            ['name' => '09. Pluto', 'filename' => '09. Pluto.mp3'],
            ['name' => '10. Mercury Triangle', 'filename' => '10. Mercury Triangle.mp3'],
            ['name' => '11. Venus Triangle', 'filename' => '11. Venus Triangle.mp3'],
            ['name' => '12. Earth Triangle', 'filename' => '12. Earth Triangle.mp3'],
            ['name' => '13. Mars Triangle', 'filename' => '13. Mars Triangle.mp3'],
            ['name' => '14. Jupiter Triangle', 'filename' => '14. Jupiter Triangle.mp3'],
            ['name' => '15. Saturn Triangle', 'filename' => '15. Saturn Triangle.mp3'],
            ['name' => '16. Neptune Triangle', 'filename' => '16. Neptune Triangle.mp3'],
            ['name' => '17. Uranus Triangle', 'filename' => '17. Uranus Triangle.mp3'],
            ['name' => '18. Pluto Triangle', 'filename' => '18. Pluto Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 70, 'category_id' => 2,
            'name' => 'Infinities Plus', 'audio_folder' => '01. Infinities Plus (Abundance & Release)', 'image' => 'InfinitiesPlus-2.jpg',
            'benefits' => '["Attract abundance, infinite resources", "Break down barriers", "Release blockages (financial, physical, mental, emotional, spiritual)", "Open doors to possibilities", "Feel love, peace and bliss"]'
        ]);
        $album->tags()->attach([1, 5, 6]);
        $album->tracks()->createMany([
            ['name' => '01. Infinities Plus 1', 'filename' => '01. Infinities Plus 1.mp3'],
            ['name' => '02. Infinities Plus 2', 'filename' => '02. Infinities Plus 2.mp3'],
            ['name' => '03. Infinities Plus 3', 'filename' => '03. Infinities Plus 3.mp3'],
            ['name' => '04. Infinities Plus 4', 'filename' => '04. Infinities Plus 4.mp3'],
            ['name' => '05. Infinities Plus 5', 'filename' => '05. Infinities Plus 5.mp3'],
            ['name' => '06. Infinities Plus 6', 'filename' => '06. Infinities Plus 6.mp3'],
            ['name' => '07. Infinities Plus 7', 'filename' => '07. Infinities Plus 7.mp3'],
            ['name' => '08. Infinities Plus 8', 'filename' => '08. Infinities Plus 8.mp3'],
            ['name' => '10. Infinities Plus Synergy', 'filename' => '10. Infinities Plus Synergy.mp3'],
            ['name' => '11. Infinities Plus Triangle 1', 'filename' => '11. Infinities Plus Triangle 1.mp3'],
            ['name' => '12. Infinities Plus Triangle 2', 'filename' => '12. Infinities Plus Triangle 2.mp3'],
            ['name' => '13. Infinities Plus Triangle 3', 'filename' => '13. Infinities Plus Triangle 3.mp3'],
            ['name' => '14. Infinities Plus Triangle 4', 'filename' => '14. Infinities Plus Triangle 4.mp3'],
            ['name' => '15. Infinities Plus Triangle 5', 'filename' => '15. Infinities Plus Triangle 5.mp3'],
            ['name' => '16. Infinities Plus Triangle 6', 'filename' => '16. Infinities Plus Triangle 6.mp3'],
            ['name' => '17. Infinities Plus Triangle 7', 'filename' => '17. Infinities Plus Triangle 7.mp3'],
            ['name' => '18. Infinities Plus Triangle 8', 'filename' => '18. Infinities Plus Triangle 8.mp3'],
            ['name' => '19. Infinities Plus Triangle 9', 'filename' => '19. Infinities Plus Triangle 9.mp3'],
            ['name' => '20. Infinities Plus Synergy Triangle', 'filename' => '20. Infinities Plus Synergy Triangle.mp3']
        ]);

        $album = Album::create(['order' => 160, 'category_id' => 3,
            'name' => 'Trinity - 3 Most Sacred Frequencies Plus', 'audio_folder' => '02. Trinity - 3 Most Sacred Frequencies Plus', 'image' => 'Trinity-2.jpg',
            'benefits' => '["Communicate with God", "Talk to God and hear His voice clearly", "Experience light body activation", "Expand your consciousness to experience joy", "Spiritual awakening"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Trinity', 'filename' => '01. Trinity.mp3'],
            ['name' => '02. Trinity A', 'filename' => '02. Trinity A.mp3'],
            ['name' => '03. Trinity B', 'filename' => '03. Trinity B.mp3'],
            ['name' => '04. Trinity C', 'filename' => '04. Trinity C.mp3'],
            ['name' => '05. Trinity Triangle', 'filename' => '05. Trinity Triangle.mp3'],
            ['name' => '06. Trinity A Triangle', 'filename' => '06. Trinity A Triangle.mp3'],
            ['name' => '07. Trinity B Triangle', 'filename' => '07. Trinity B Triangle.mp3'],
            ['name' => '08. Trinity C Triangle', 'filename' => '08. Trinity C Triangle.mp3'],
            ['name' => '09. Trinity Square', 'filename' => '09. Trinity Square.mp3'],
        ]);

        $album = Album::create(['order' => 80, 'category_id' => 2,
            'name' => 'The Cube - Sacred Resonance', 'audio_folder' => '03. The Cube - Sacred Resonance', 'image' => 'TheCubeSacredResonance-2.jpg',
            'benefits' => '["Enter into 3 dimensional, 4 dimensional, multi­dimensional consciousness", "Multi­dimensional travel", "Mind expansion", "Deep mystical brainwave training"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Cube 1', 'filename' => '01. Cube 1.mp3'],
            ['name' => '02. Cube 2', 'filename' => '02. Cube 2.mp3'],
            ['name' => '03. Cube 3', 'filename' => '03. Cube 3.mp3'],
            ['name' => '04. Cube 4', 'filename' => '04. Cube 4.mp3'],
            ['name' => '05. Cube 5', 'filename' => '05. Cube 5.mp3'],
            ['name' => '06. Cube 6', 'filename' => '06. Cube 6.mp3'],
            ['name' => '07. Cube 1 Triangle', 'filename' => '07. Cube 1 Triangle.mp3'],
            ['name' => '08. Cube 2 Triangle', 'filename' => '08. Cube 2 Triangle.mp3'],
            ['name' => '09. Cube 3 Triangle', 'filename' => '09. Cube 3 Triangle.mp3'],
            ['name' => '10. Cube 4 Triangle', 'filename' => '10. Cube 4 Triangle.mp3'],
            ['name' => '11. Cube 5 Triangle', 'filename' => '11. Cube 5 Triangle.mp3'],
            ['name' => '12. Cube 6 Triangle', 'filename' => '12. Cube 6 Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 90, 'category_id' => 2,
            'name' => 'Cosmic Frequency of Life', 'audio_folder' => '04. 432 Hz Cosmic Frequency of Life', 'image' => 'CosmicFrequencyofLife-2.jpg',
            'benefits' => '["Releases tension from the body and mind", "Unites the body and consciousness with nature", "Helps in the release of serotonin and endorphins", "Remove negative energy and blockages", "Feel calmer, happier and  more relaxed "]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 432 Sine', 'filename' => '01. 432 Sine.mp3'],
            ['name' => '02. 432 Square', 'filename' => '02. 432 Square.mp3'],
            ['name' => '03. 432 Sawtooth', 'filename' => '03. 432 Sawtooth.mp3'],
            ['name' => '04. 432 Slow Pulse', 'filename' => '04. 432 Slow Pulse.mp3'],
            ['name' => '05. 432 Steady Pulse', 'filename' => '05. 432 Steady Pulse.mp3'],
            ['name' => '06. 432 Fast Pulse', 'filename' => '06. 432 Fast Pulse.mp3'],
            ['name' => '07. 432 Rotating Pulse', 'filename' => '07. 432 Rotating Pulse.mp3'],
            ['name' => '08. 432 Square Trance', 'filename' => '08. 432 Square Trance.mp3'],
            ['name' => '09. 432 Square Sine Pulse', 'filename' => '09. 432 Square Sine Pulse.mp3'],
            ['name' => '10. 432 Saw Triangle Pulse', 'filename' => '10. 432 Saw Triangle Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 100, 'category_id' => 2,
            'name' => 'Balance Frequency of Wholeness', 'audio_folder' => '05. 360 Hz Balance Frequency of Wholeness', 'image' => 'BalanceFrequencyofWholeness-2.jpg',
            'benefits' => '["Bring the body and mind into balance", "Helps restore health", "Feel joy and happiness", "Improve overall physical, mental and emotional well-being"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => '01. 360 Sine', 'filename' => '01. 360 Sine.mp3'],
            ['name' => '02. 360 Square', 'filename' => '02. 360 Square.mp3'],
            ['name' => '03. 360 Sawtooth', 'filename' => '03. 360 Sawtooth.mp3'],
            ['name' => '04. 360 Slow Pulse', 'filename' => '04. 360 Slow Pulse.mp3'],
            ['name' => '05. 360 Steady Pulse', 'filename' => '05. 360 Steady Pulse.mp3'],
            ['name' => '06. 360 Fast Pulse', 'filename' => '06. 360 Fast Pulse.mp3'],
            ['name' => '07. 360 Rotating Pulse', 'filename' => '07. 360 Rotating Pulse.mp3'],
            ['name' => '08. 360 Square Trance', 'filename' => '08. 360 Square Trance.mp3'],
            ['name' => '09. 360 Square Sine Pulse', 'filename' => '09. 360 Square Sine Pulse.mp3'],
            ['name' => '10. 360 Saw Triangle Pulse', 'filename' => '10. 360 Saw Triangle Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 170, 'category_id' => 3,
            'name' => 'Great Pyramid Harmonics', 'audio_folder' => '06. Great Pyramid Harmonics', 'image' => 'GreatPyramidHarmonics-2.jpg',
            'benefits' => '["Make your thoughts become reality", "Amplify your ability to manifest your intentions", "Light body activation", "Get answers to any question to the universe", "Talk to God", "Hear God"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Great Pyramid Harmonics 1', 'filename' => '01. Great Pyramid Harmonics 1.mp3'],
            ['name' => '02. Great Pyramid Harmonics 2', 'filename' => '02. Great Pyramid Harmonics 2.mp3'],
            ['name' => '03. Great Pyramid Harmonics 3', 'filename' => '03. Great Pyramid Harmonics 3.mp3'],
            ['name' => '04. Great Pyramid Harmonics 4', 'filename' => '04. Great Pyramid Harmonics 4.mp3'],
            ['name' => '05. Great Pyramid Harmonics 5', 'filename' => '05. Great Pyramid Harmonics 5.mp3'],
            ['name' => '06. Great Pyramid Harmonics 6', 'filename' => '06. Great Pyramid Harmonics 6.mp3'],
            ['name' => '07. Great Pyramid Harmonics 7', 'filename' => '07. Great Pyramid Harmonics 7.mp3'],
            ['name' => '08. Great Pyramid Harmonics 8', 'filename' => '08. Great Pyramid Harmonics 8.mp3'],
            ['name' => '09. Great Pyramid Harmonics 9', 'filename' => '09. Great Pyramid Harmonics 9.mp3'],
            ['name' => '10. Great Pyramid Harmonics Triangle 1', 'filename' => '10. Great Pyramid Harmonics Triangle 1.mp3'],
            ['name' => '11. Great Pyramid Harmonics Triangle 2', 'filename' => '11. Great Pyramid Harmonics Triangle 2.mp3'],
            ['name' => '12. Great Pyramid Harmonics Triangle 3', 'filename' => '12. Great Pyramid Harmonics Triangle 3.mp3'],
            ['name' => '13. Great Pyramid Harmonics Triangle 4', 'filename' => '13. Great Pyramid Harmonics Triangle 4.mp3'],
            ['name' => '14. Great Pyramid Harmonics Triangle 5', 'filename' => '14. Great Pyramid Harmonics Triangle 5.mp3'],
            ['name' => '15. Great Pyramid Harmonics Triangle 6', 'filename' => '15. Great Pyramid Harmonics Triangle 6.mp3'],
            ['name' => '16. Great Pyramid Harmonics Triangle 7', 'filename' => '16. Great Pyramid Harmonics Triangle 7.mp3'],
            ['name' => '17. Great Pyramid Harmonics Triangle 8', 'filename' => '17. Great Pyramid Harmonics Triangle 8.mp3'],
            ['name' => '18. Great Pyramid Harmonics Triangle 9', 'filename' => '18. Great Pyramid Harmonics Triangle 9.mp3'],
            ['name' => '19. Great Pyramid Harmonics Square 1', 'filename' => '19. Great Pyramid Harmonics Square 1.mp3'],
            ['name' => '20. Great Pyramid Harmonics Square 2', 'filename' => '20. Great Pyramid Harmonics Square 2.mp3'],
            ['name' => '21. Great Pyramid Harmonics Square 3', 'filename' => '21. Great Pyramid Harmonics Square 3.mp3'],
            ['name' => '22. Great Pyramid Harmonics Square 4', 'filename' => '22. Great Pyramid Harmonics Square 4.mp3'],
            ['name' => '23. Great Pyramid Harmonics Square 5', 'filename' => '23. Great Pyramid Harmonics Square 5.mp3'],
            ['name' => '24. Great Pyramid Harmonics Square 6', 'filename' => '24. Great Pyramid Harmonics Square 6.mp3'],
            ['name' => '25. Great Pyramid Harmonics Square 7', 'filename' => '25. Great Pyramid Harmonics Square 7.mp3'],
            ['name' => '26. Great Pyramid Harmonics Square 8', 'filename' => '26. Great Pyramid Harmonics Square 8.mp3'],
            ['name' => '27. Great Pyramid Harmonics Square 9', 'filename' => '27. Great Pyramid Harmonics Square 9.mp3'],
            ['name' => '28. Great Pyramid Harmonics Sawtooth 1', 'filename' => '28. Great Pyramid Harmonics Sawtooth 1.mp3'],
            ['name' => '29. Great Pyramid Harmonics Sawtooth 2', 'filename' => '29. Great Pyramid Harmonics Sawtooth 2.mp3'],
            ['name' => '30. Great Pyramid Harmonics Sawtooth 3', 'filename' => '30. Great Pyramid Harmonics Sawtooth 3.mp3'],
            ['name' => '31. Great Pyramid Harmonics Sawtooth 4', 'filename' => '31. Great Pyramid Harmonics Sawtooth 4.mp3'],
            ['name' => '32. Great Pyramid Harmonics Sawtooth 5', 'filename' => '32. Great Pyramid Harmonics Sawtooth 5.mp3'],
            ['name' => '33. Great Pyramid Harmonics Sawtooth 6', 'filename' => '33. Great Pyramid Harmonics Sawtooth 6.mp3'],
            ['name' => '34. Great Pyramid Harmonics Sawtooth 7', 'filename' => '34. Great Pyramid Harmonics Sawtooth 7.mp3'],
            ['name' => '35. Great Pyramid Harmonics Sawtooth 8', 'filename' => '35. Great Pyramid Harmonics Sawtooth 8.mp3'],
            ['name' => '36. Great Pyramid Harmonics Sawtooth 9', 'filename' => '36. Great Pyramid Harmonics Sawtooth 9.mp3'],
            ['name' => '37. Great Pyramid Harmonics Blend', 'filename' => '37. Great Pyramid Harmonics Blend.mp3'],
            ['name' => '38. Great Pyramid Harmonics Blend Triangle', 'filename' => '38. Great Pyramid Harmonics Blend Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 110, 'category_id' => 2,
            'name' => 'Prime Numbers Vortex', 'audio_folder' => '07. Prime Numbers Vortex', 'image' => 'Prime Numbers Time Travel Vortex.png',
            'benefits' => '["Remove blockages in your life", "Clear and heal past traumas", "Release stuck negative energy", "Project into the future", "See the outcome of your current life choices"]'
        ]);
        $album->tags()->attach([1, 5]);
        $album->tracks()->createMany([
            ['name' => '01. 1-10 Prime Numbers Vortex (Below normal hearing range)', 'filename' => '01. 1-10 Prime Numbers Vortex (Below normal hearing range).mp3'],
            ['name' => '02. 11-20 Prime Numbers Vortex', 'filename' => '02. 11-20 Prime Numbers Vortex.mp3'],
            ['name' => '03. 21-30 Prime Numbers Vortex', 'filename' => '03. 21-30 Prime Numbers Vortex.mp3'],
            ['name' => '04. 31-40 Prime Numbers Vortex', 'filename' => '04. 31-40 Prime Numbers Vortex.mp3'],
            ['name' => '05. 41-50 Prime Numbers Vortex', 'filename' => '05. 41-50 Prime Numbers Vortex.mp3'],
            ['name' => '06. 51-60 Prime Numbers Vortex', 'filename' => '06. 51-60 Prime Numbers Vortex.mp3'],
            ['name' => '07. 61-70 Prime Numbers Vortex', 'filename' => '07. 61-70 Prime Numbers Vortex.mp3'],
            ['name' => '08. 71-80 Prime Numbers Vortex', 'filename' => '08. 71-80 Prime Numbers Vortex.mp3'],
            ['name' => '09. 81-90 Prime Numbers Vortex', 'filename' => '09. 81-90 Prime Numbers Vortex.mp3'],
            ['name' => '10. 91-100 Prime Numbers Vortex', 'filename' => '10. 91-100 Prime Numbers Vortex.mp3'],
            ['name' => '11. ALL 1-100 Prime Numbers Vortex', 'filename' => '11. ALL 1-100 Prime Numbers Vortex.mp3'],
        ]);

        $album = Album::create(['order' => 120, 'category_id' => 2,
            'name' => 'Prime Numbers 1000', 'audio_folder' => '08. Prime Numbers 1000', 'image' => 'Prime-Numbers-1000-No-URL.jpg',
            'benefits' => '["Clear and heal past traumas and start the healing process", "Release stuck negative energy", "See the outcome of your current life choices", "Change the present to change the future", "Remove physical, mental, emotional, spiritual, and financial blockages in your life"]'
        ]);
        $album->tags()->attach([1, 5]);
        $album->tracks()->createMany([
            ['name' => 'Prime Numbers 1000 101-110', 'filename' => 'Prime Numbers 1000 101-110.mp3'],
            ['name' => 'Prime Numbers 1000 111-120', 'filename' => 'Prime Numbers 1000 111-120.mp3'],
            ['name' => 'Prime Numbers 1000 121-130', 'filename' => 'Prime Numbers 1000 121-130.mp3'],
            ['name' => 'Prime Numbers 1000 131-140', 'filename' => 'Prime Numbers 1000 131-140.mp3'],
            ['name' => 'Prime Numbers 1000 141-150', 'filename' => 'Prime Numbers 1000 141-150.mp3'],
            ['name' => 'Prime Numbers 1000 151-160', 'filename' => 'Prime Numbers 1000 151-160.mp3'],
            ['name' => 'Prime Numbers 1000 161-170', 'filename' => 'Prime Numbers 1000 161-170.mp3'],
            ['name' => 'Prime Numbers 1000 171-180', 'filename' => 'Prime Numbers 1000 171-180.mp3'],
            ['name' => 'Prime Numbers 1000 181-190', 'filename' => 'Prime Numbers 1000 181-190.mp3'],
            ['name' => 'Prime Numbers 1000 191-200', 'filename' => 'Prime Numbers 1000 191-200.mp3'],
            ['name' => 'Prime Numbers 1000 201-210', 'filename' => 'Prime Numbers 1000 201-210.mp3'],
            ['name' => 'Prime Numbers 1000 211-220', 'filename' => 'Prime Numbers 1000 211-220.mp3'],
            ['name' => 'Prime Numbers 1000 221-230', 'filename' => 'Prime Numbers 1000 221-230.mp3'],
            ['name' => 'Prime Numbers 1000 231-240', 'filename' => 'Prime Numbers 1000 231-240.mp3'],
            ['name' => 'Prime Numbers 1000 241-250', 'filename' => 'Prime Numbers 1000 241-250.mp3'],
            ['name' => 'Prime Numbers 1000 251-260', 'filename' => 'Prime Numbers 1000 251-260.mp3'],
            ['name' => 'Prime Numbers 1000 261-270', 'filename' => 'Prime Numbers 1000 261-270.mp3'],
            ['name' => 'Prime Numbers 1000 271-280', 'filename' => 'Prime Numbers 1000 271-280.mp3'],
            ['name' => 'Prime Numbers 1000 281-290', 'filename' => 'Prime Numbers 1000 281-290.mp3'],
            ['name' => 'Prime Numbers 1000 291-300', 'filename' => 'Prime Numbers 1000 291-300.mp3'],
            ['name' => 'Prime Numbers 1000 301-310', 'filename' => 'Prime Numbers 1000 301-310.mp3'],
            ['name' => 'Prime Numbers 1000 311-320', 'filename' => 'Prime Numbers 1000 311-320.mp3'],
            ['name' => 'Prime Numbers 1000 321-330', 'filename' => 'Prime Numbers 1000 321-330.mp3'],
            ['name' => 'Prime Numbers 1000 331-340', 'filename' => 'Prime Numbers 1000 331-340.mp3'],
            ['name' => 'Prime Numbers 1000 341-350', 'filename' => 'Prime Numbers 1000 341-350.mp3'],
            ['name' => 'Prime Numbers 1000 351-360', 'filename' => 'Prime Numbers 1000 351-360.mp3'],
            ['name' => 'Prime Numbers 1000 361-370', 'filename' => 'Prime Numbers 1000 361-370.mp3'],
            ['name' => 'Prime Numbers 1000 371-380', 'filename' => 'Prime Numbers 1000 371-380.mp3'],
            ['name' => 'Prime Numbers 1000 381-390', 'filename' => 'Prime Numbers 1000 381-390.mp3'],
            ['name' => 'Prime Numbers 1000 391-400', 'filename' => 'Prime Numbers 1000 391-400.mp3'],
            ['name' => 'Prime Numbers 1000 401-410', 'filename' => 'Prime Numbers 1000 401-410.mp3'],
            ['name' => 'Prime Numbers 1000 411-420', 'filename' => 'Prime Numbers 1000 411-420.mp3'],
            ['name' => 'Prime Numbers 1000 421-430', 'filename' => 'Prime Numbers 1000 421-430.mp3'],
            ['name' => 'Prime Numbers 1000 431-440', 'filename' => 'Prime Numbers 1000 431-440.mp3'],
            ['name' => 'Prime Numbers 1000 441-450', 'filename' => 'Prime Numbers 1000 441-450.mp3'],
            ['name' => 'Prime Numbers 1000 451-460', 'filename' => 'Prime Numbers 1000 451-460.mp3'],
            ['name' => 'Prime Numbers 1000 461-470', 'filename' => 'Prime Numbers 1000 461-470.mp3'],
            ['name' => 'Prime Numbers 1000 471-480', 'filename' => 'Prime Numbers 1000 471-480.mp3'],
            ['name' => 'Prime Numbers 1000 481-490', 'filename' => 'Prime Numbers 1000 481-490.mp3'],
            ['name' => 'Prime Numbers 1000 491-500', 'filename' => 'Prime Numbers 1000 491-500.mp3'],
            ['name' => 'Prime Numbers 1000 501-510', 'filename' => 'Prime Numbers 1000 501-510.mp3'],
            ['name' => 'Prime Numbers 1000 511-520', 'filename' => 'Prime Numbers 1000 511-520.mp3'],
            ['name' => 'Prime Numbers 1000 531-540', 'filename' => 'Prime Numbers 1000 531-540.mp3'],
            ['name' => 'Prime Numbers 1000 541-550', 'filename' => 'Prime Numbers 1000 541-550.mp3'],
            ['name' => 'Prime Numbers 1000 551-560', 'filename' => 'Prime Numbers 1000 551-560.mp3'],
            ['name' => 'Prime Numbers 1000 561-570', 'filename' => 'Prime Numbers 1000 561-570.mp3'],
            ['name' => 'Prime Numbers 1000 571-580', 'filename' => 'Prime Numbers 1000 571-580.mp3'],
            ['name' => 'Prime Numbers 1000 581-590', 'filename' => 'Prime Numbers 1000 581-590.mp3'],
            ['name' => 'Prime Numbers 1000 591-600', 'filename' => 'Prime Numbers 1000 591-600.mp3'],
            ['name' => 'Prime Numbers 1000 601-610', 'filename' => 'Prime Numbers 1000 601-610.mp3'],
            ['name' => 'Prime Numbers 1000 611-620', 'filename' => 'Prime Numbers 1000 611-620.mp3'],
            ['name' => 'Prime Numbers 1000 621-630', 'filename' => 'Prime Numbers 1000 621-630.mp3'],
            ['name' => 'Prime Numbers 1000 631-640', 'filename' => 'Prime Numbers 1000 631-640.mp3'],
            ['name' => 'Prime Numbers 1000 641-650', 'filename' => 'Prime Numbers 1000 641-650.mp3'],
            ['name' => 'Prime Numbers 1000 651-660', 'filename' => 'Prime Numbers 1000 651-660.mp3'],
            ['name' => 'Prime Numbers 1000 661-670', 'filename' => 'Prime Numbers 1000 671-680.mp3'],
            ['name' => 'Prime Numbers 1000 681-690', 'filename' => 'Prime Numbers 1000 681-690.mp3'],
            ['name' => 'Prime Numbers 1000 691-700', 'filename' => 'Prime Numbers 1000 691-700.mp3'],
            ['name' => 'Prime Numbers 1000 701-710', 'filename' => 'Prime Numbers 1000 701-710.mp3'],
            ['name' => 'Prime Numbers 1000 711-720', 'filename' => 'Prime Numbers 1000 711-720.mp3'],
            ['name' => 'Prime Numbers 1000 721-730', 'filename' => 'Prime Numbers 1000 721-730.mp3'],
            ['name' => 'Prime Numbers 1000 731-740', 'filename' => 'Prime Numbers 1000 731-740.mp3'],
            ['name' => 'Prime Numbers 1000 741-750', 'filename' => 'Prime Numbers 1000 741-750.mp3'],
            ['name' => 'Prime Numbers 1000 751-760', 'filename' => 'Prime Numbers 1000 751-760.mp3'],
            ['name' => 'Prime Numbers 1000 761-770', 'filename' => 'Prime Numbers 1000 761-770.mp3'],
            ['name' => 'Prime Numbers 1000 771-780', 'filename' => 'Prime Numbers 1000 771-780.mp3'],
            ['name' => 'Prime Numbers 1000 781-790', 'filename' => 'Prime Numbers 1000 781-790.mp3'],
            ['name' => 'Prime Numbers 1000 791-800', 'filename' => 'Prime Numbers 1000 791-800.mp3'],
            ['name' => 'Prime Numbers 1000 801-810', 'filename' => 'Prime Numbers 1000 801-810.mp3'],
            ['name' => 'Prime Numbers 1000 811-820', 'filename' => 'Prime Numbers 1000 811-820.mp3'],
            ['name' => 'Prime Numbers 1000 821-830', 'filename' => 'Prime Numbers 1000 821-830.mp3'],
            ['name' => 'Prime Numbers 1000 831-840', 'filename' => 'Prime Numbers 1000 831-840.mp3'],
            ['name' => 'Prime Numbers 1000 841-850', 'filename' => 'Prime Numbers 1000 841-850.mp3'],
            ['name' => 'Prime Numbers 1000 851-860', 'filename' => 'Prime Numbers 1000 851-860.mp3'],
            ['name' => 'Prime Numbers 1000 861-870', 'filename' => 'Prime Numbers 1000 861-870.mp3'],
            ['name' => 'Prime Numbers 1000 871-880', 'filename' => 'Prime Numbers 1000 871-880.mp3'],
            ['name' => 'Prime Numbers 1000 881-890', 'filename' => 'Prime Numbers 1000 881-890.mp3'],
            ['name' => 'Prime Numbers 1000 891-900', 'filename' => 'Prime Numbers 1000 891-900.mp3'],
            ['name' => 'Prime Numbers 1000 901-910', 'filename' => 'Prime Numbers 1000 901-910.mp3'],
            ['name' => 'Prime Numbers 1000 911-920', 'filename' => 'Prime Numbers 1000 911-920.mp3'],
            ['name' => 'Prime Numbers 1000 921-930', 'filename' => 'Prime Numbers 1000 921-930.mp3'],
            ['name' => 'Prime Numbers 1000 931-940', 'filename' => 'Prime Numbers 1000 931-940.mp3'],
            ['name' => 'Prime Numbers 1000 941-950', 'filename' => 'Prime Numbers 1000 941-950.mp3'],
            ['name' => 'Prime Numbers 1000 951-960', 'filename' => 'Prime Numbers 1000 951-960.mp3'],
            ['name' => 'Prime Numbers 1000 961-970', 'filename' => 'Prime Numbers 1000 961-970.mp3'],
            ['name' => 'Prime Numbers 1000 971-980', 'filename' => 'Prime Numbers 1000 971-980.mp3'],
            ['name' => 'Prime Numbers 1000 981-990', 'filename' => 'Prime Numbers 1000 981-990.mp3'],
            ['name' => 'Prime Numbers 1000 991-1000', 'filename' => 'Prime Numbers 1000 991-1000.mp3'],
        ]);

        $album = Album::create(['order' => 130, 'category_id' => 2,
            'name' => 'Polygonal Frequencies', 'audio_folder' => '09. Polygonal Frequencies', 'image' => 'Polygonal.png',
            'benefits' => '["Mental fatique relief", "Enhance invigoration, vitality, strength and stamina", "Feel love, joy and happiness", "Mind and body relaxation", "Promotes regeneration"]'
        ]);
        $album->tags()->attach([5]);
        $album->tracks()->createMany([
            ['name' => '01. Polygonal Frequencies - 3 Triangle Numbers', 'filename' => '01. Polygonal Frequencies - 3 Triangle Numbers.mp3'],
            ['name' => '02. Polygonal Frequencies - 4 Square Numbers', 'filename' => '02. Polygonal Frequencies - 4 Square Numbers.mp3'],
            ['name' => '03. Polygonal Frequencies - 5 Pentagonal Numbers', 'filename' => '03. Polygonal Frequencies - 5 Pentagonal Numbers.mp3'],
            ['name' => '04. Polygonal Frequencies - 6 Hexagonal Numbers', 'filename' => '04. Polygonal Frequencies - 6 Hexagonal Numbers.mp3'],
            ['name' => '05. Polygonal Frequencies - 7 Heptagonal Numbers', 'filename' => '05. Polygonal Frequencies - 7 Heptagonal Numbers.mp3'],
            ['name' => '06. Polygonal Frequencies - 8 Octagonal Numbers', 'filename' => '06. Polygonal Frequencies - 8 Octagonal Numbers.mp3'],
            ['name' => '07. Polygonal Frequencies - 9 Nonagonal Numbers', 'filename' => '07. Polygonal Frequencies - 9 Nonagonal Numbers.mp3'],
            ['name' => '08. Polygonal Frequencies - 10 Decagonal Numbers', 'filename' => '08. Polygonal Frequencies - 10 Decagonal Numbers.mp3'],
            ['name' => '09. Polygonal Frequencies - 11 Hendecagonal Numbers', 'filename' => '09. Polygonal Frequencies - 11 Hendecagonal Numbers.mp3'],
            ['name' => '10. Polygonal Frequencies - 12 Dodecagonal Numbers', 'filename' => '10. Polygonal Frequencies - 12 Dodecagonal Numbers.mp3'],
            ['name' => '11. Polygonal Frequencies - 13 Tridecagonal Numbers', 'filename' => '11. Polygonal Frequencies - 13 Tridecagonal Numbers.mp3'],
            ['name' => '12. Polygonal Frequencies - 14 Tetradecagoonal Numbers', 'filename' => '12. Polygonal Frequencies - 14 Tetradecagoonal Numbers.mp3'],
        ]);

        $album = Album::create(['order' => 140, 'category_id' => 2,
            'name' => 'Royal Cubit', 'audio_folder' => '10. Royal Cubit', 'image' => 'Royal Cubit.png',
            'benefits' => '["Attract abundance by helping to materialize ideas", "Helps grounding", "Helps with Meditation, Manifestation, Visualisation & Cosmic Ordering", "Works the 4th Chakra and connecting beings to Mother Earth", "Divine feminine energy"]'
        ]);
        $album->tags()->attach([5]);
        $album->tracks()->createMany([
            ['name' => '01. Royal Cubit Frequencies 1', 'filename' => '01. Royal Cubit Frequencies 1.mp3'],
            ['name' => '02. Royal Cubit Frequencies 2', 'filename' => '02. Royal Cubit Frequencies 2.mp3'],
            ['name' => '03. Royal Cubit Frequencies 3', 'filename' => '03. Royal Cubit Frequencies 3.mp3'],
            ['name' => '04. Royal Cubit Frequencies 4', 'filename' => '04. Royal Cubit Frequencies 4.mp3'],
        ]);

        $album = Album::create(['order' => 150, 'category_id' => 3,
            'name' => 'Spiritual Ascension', 'audio_folder' => '11. Spiritual Ascension', 'image' => 'Spiritual Ascension.png',
            'benefits' => '["Make your thoughts become reality", "Amplify your ability to manifest your intentions", "Induce deep meditation and healing states of consciousness", "Unlock your hidden human potential", "Strengthen and balance your energy", "Light body activation, open stargates"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Spiritual Ascension - Ascending - Major Long', 'filename' => '01. Spiritual Ascension - Ascending - Major Long.mp3'],
            ['name' => '02. Spiritual Ascension - Ascending - Mid Long', 'filename' => '02. Spiritual Ascension - Ascending - Mid Long.mp3'],
            ['name' => '03. Spiritual Ascension - Ascending - Minor Long', 'filename' => '03. Spiritual Ascension - Ascending - Minor Long.mp3'],
            ['name' => '04. Spiritual Ascension - Descending - Major Long', 'filename' => '04. Spiritual Ascension - Descending - Major Long.mp3'],
            ['name' => '05. Spiritual Ascension - Descending - Mid Long', 'filename' => '05. Spiritual Ascension - Descending - Mid Long.mp3'],
            ['name' => '06. Spiritual Ascension - Descending - Minor Long', 'filename' => '06. Spiritual Ascension - Descending - Minor Long.mp3'],
            ['name' => '07. Spiritual Ascension - Ascending - Major Short', 'filename' => '07. Spiritual Ascension - Ascending - Major Short.mp3'],
            ['name' => '08. Spiritual Ascension - Ascending - Mid Short', 'filename' => '08. Spiritual Ascension - Ascending - Mid Short.mp3'],
            ['name' => '09. Spiritual Ascension - Ascending - Minor Short', 'filename' => '09. Spiritual Ascension - Ascending - Minor Short.mp3'],
            ['name' => '10. Spiritual Ascension - Descending - Major Short', 'filename' => '10. Spiritual Ascension - Descending - Major Short.mp3'],
            ['name' => '11. Spiritual Ascension - Descending - Mid Short', 'filename' => '11. Spiritual Ascension - Descending - Mid Short.mp3'],
            ['name' => '12. Spiritual Ascension - Descending - Minor Short', 'filename' => '12. Spiritual Ascension - Descending - Minor Short.mp3'],
        ]);

        // Quantum II

        $album = Album::create(['order' => 71, 'category_id' => 2, 'is_active' => 0,
            'name' => 'Infinities Max', 'audio_folder' => 'Infinities Max', 'image' => 'InfinitiesMax.png',
            'benefits' => '["Attract abundance, infinite resources", "Break down barriers", "Release blockages", "Open doors to possibilities"]'
        ]);
        $album->tags()->attach([1, 5, 6]);
        $album->tracks()->createMany([
            ['name' => 'Infinities Max - Abundance 1', 'filename' => 'Infinities Max - Abundance 1.mp3'],
            ['name' => 'Infinities Max - Abundance 2', 'filename' => 'Infinities Max - Abundance 2.mp3'],
        ]);

        $album = Album::create(['order' => 20, 'category_id' => 1,
            'name' => '9 Planets Pi', 'audio_folder' => '05. 9 Planets Pi', 'image' => '9PlanetPi-2.jpg',
            'benefits' => '["Get health and focus boost", "Get Love, Forgiveness, Acceptance, Gentleness, Nurture", "Feel Energized, remove fatigue", "Sleep better, feel rested, recharged, recovered", "Get ultra relaxation and healing", "Balance your chakras"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Mercury', 'filename' => '01. Mercury.mp3'],
            ['name' => '02. Venus', 'filename' => '02. Venus.mp3'],
            ['name' => '03. Earth', 'filename' => '03. Earth.mp3'],
            ['name' => '04. Mars', 'filename' => '04. Mars.mp3'],
            ['name' => '05. Jupiter', 'filename' => '05. Jupiter.mp3'],
            ['name' => '06. Saturn', 'filename' => '06. Saturn.mp3'],
            ['name' => '07. Neptune', 'filename' => '07. Neptune.mp3'],
            ['name' => '08. Uranus', 'filename' => '08. Uranus.mp3'],
            ['name' => '09. Pluto', 'filename' => '09. Pluto.mp3'],
            ['name' => '10. Mercury Triangle', 'filename' => '10. Mercury Triangle.mp3'],
            ['name' => '11. Venus Triangle', 'filename' => '11. Venus Triangle.mp3'],
            ['name' => '12. Earth Triangle', 'filename' => '12. Earth Triangle.mp3'],
            ['name' => '13. Mars Triangle', 'filename' => '13. Mars Triangle.mp3'],
            ['name' => '14. Jupiter Triangle', 'filename' => '14. Jupiter Triangle.mp3'],
            ['name' => '15. Saturn Triangle', 'filename' => '15. Saturn Triangle.mp3'],
            ['name' => '16. Neptune Triangle', 'filename' => '16. Neptune Triangle.mp3'],
            ['name' => '17. Uranus Triangle', 'filename' => '17. Uranus Triangle.mp3'],
            ['name' => '18. Pluto Triangle', 'filename' => '18. Pluto Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 30, 'category_id' => 1,
            'name' => 'Sun and Moon Resonance', 'audio_folder' => '02. Sun and Moon Resonance', 'image' => 'SunandMoon-2.jpg',
            'benefits' => '["Deep levels of relaxation", "Reach altered states of consciousness through brainwave entrainment", "Experience deep sleep", "Stress and anxiety reduction", "Mind and body healing"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Sun Resonance', 'filename' => '01. Sun Resonance.mp3'],
            ['name' => '02. Sun Resonance Pi', 'filename' => '02. Sun Resonance Pi.mp3'],
            ['name' => '03. Moon Resonance', 'filename' => '03. Moon Resonance.mp3'],
            ['name' => '04. Moon Resonance Pi', 'filename' => '04. Moon Resonance Pi.mp3'],
            ['name' => '05. Sun Resonance Triangle', 'filename' => '05. Sun Resonance Triangle.mp3'],
            ['name' => '06. Sun Resonance Pi Triangle', 'filename' => '06. Sun Resonance Pi Triangle.mp3'],
            ['name' => '07. Moon Resonance Triangle', 'filename' => '07. Moon Resonance Triangle.mp3'],
            ['name' => '08. Moon Resonance Pi Triangle', 'filename' => '08. Moon Resonance Pi Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 40, 'category_id' => 1,
            'name' => 'Schumann Resonance 7.83 Hz Brainwave Frequencies', 'audio_folder' => '03. Schumann Resonance 7.83 Hz Brainwave Frequencies', 'image' => 'SchumannBrainwave-2.jpg',
            'benefits' => '["Earth’s natural heartbeat rhythm is the frequency of 7.83 Hz", "Tunes Alpha/Theta brainwave frequencies", "Feel relaxed, dreamy, sleepy state", "Helps with cell regeneration", "Balance your bio-electromagnetic waves", "EMF Protection"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Schumann Frequency 14.1 Hz Alpha', 'filename' => '01. Schumann Frequency 14.1 Hz Alpha.mp3'],
            ['name' => '02. Schumann Frequency 20.8 Hz Beta', 'filename' => '02. Schumann Frequency 20.8 Hz Beta.mp3'],
            ['name' => '03. Schumann Frequency 27.3 Hz Beta', 'filename' => '03. Schumann Frequency 27.3 Hz Beta.mp3'],
            ['name' => '04. Schumann Frequency 33.8 Hz Gamma', 'filename' => '04. Schumann Frequency 33.8 Hz Gamma.mp3'],
            ['name' => '05. Schumann Frequency 39 Hz Gamma', 'filename' => '05. Schumann Frequency 39 Hz Gamma.mp3'],
            ['name' => '06. Schumann Frequency 45 Hz Gamma', 'filename' => '06. Schumann Frequency 45 Hz Gamma.mp3'],
            ['name' => '07. Schumann Frequency 7.83 Hz Theta', 'filename' => '07. Schumann Frequency 7.83 Hz Theta.mp3'],
            ['name' => '08. True Earth Frequency 7.49 Hz Theta', 'filename' => '08. True Earth Frequency 7.49 Hz Theta.mp3'],
            ['name' => '09. Schumann Frequency 14.1 Hz Alpha Square', 'filename' => '09. Schumann Frequency 14.1 Hz Alpha Square.mp3'],
            ['name' => '10. Schumann Frequency 20.8 Hz Beta Square', 'filename' => '10. Schumann Frequency 20.8 Hz Beta Square.mp3'],
            ['name' => '11. Schumann Frequency 27.3 Hz Beta Square', 'filename' => '11. Schumann Frequency 27.3 Hz Beta Square.mp3'],
            ['name' => '12. Schumann Frequency 33.8 Hz Gamma Square', 'filename' => '12. Schumann Frequency 33.8 Hz Gamma Square.mp3'],
            ['name' => '13. Schumann Frequency 39 Hz Gamma Square', 'filename' => '13. Schumann Frequency 39 Hz Gamma Square.mp3'],
            ['name' => '14. Schumann Frequency 45 Hz Gamma Square', 'filename' => '14. Schumann Frequency 45 Hz Gamma Square.mp3'],
            ['name' => '15. Schumann Frequency 7.83 Hz Theta Square', 'filename' => '15. Schumann Frequency 7.83 Hz Theta Square.mp3'],
            ['name' => '16. True Earth Frequency 7.49 Hz Theta Square', 'filename' => '16. True Earth Frequency 7.49 Hz Theta Square.mp3'],
            ['name' => '17. Schumann Frequency 14.1 Hz Alpha Sawtooth', 'filename' => '17. Schumann Frequency 14.1 Hz Alpha Sawtooth.mp3'],
            ['name' => '18. Schumann Frequency 20.8 Hz Beta Sawtooth', 'filename' => '18. Schumann Frequency 20.8 Hz Beta Sawtooth.mp3'],
            ['name' => '19. Schumann Frequency 27.3 Hz Beta Sawtooth', 'filename' => '19. Schumann Frequency 27.3 Hz Beta Sawtooth.mp3'],
            ['name' => '20. Schumann Frequency 33.8 Hz Gamma Sawtooth', 'filename' => '20. Schumann Frequency 33.8 Hz Gamma Sawtooth.mp3'],
            ['name' => '21. Schumann Frequency 39 Hz Gamma Sawtooth', 'filename' => '21. Schumann Frequency 39 Hz Gamma Sawtooth.mp3'],
            ['name' => '22. Schumann Frequency 45 Hz Gamma Sawtooth', 'filename' => '22. Schumann Frequency 45 Hz Gamma Sawtooth.mp3'],
            ['name' => '23. Schumann Frequency 7.83 Hz Theta Sawtooth', 'filename' => '23. Schumann Frequency 7.83 Hz Theta Sawtooth.mp3'],
            ['name' => '24. True Earth Frequency 7.49 Hz Theta Sawtooth', 'filename' => '24. True Earth Frequency 7.49 Hz Theta Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 50, 'category_id' => 1,
            'name' => 'Schumann Resonance 7.83 Hz Advanced Brainwave Harmonics', 'audio_folder' => '04. Schumann Resonance 7.83 Hz Advanced Brainwave Harmonics', 'image' => 'SchumannAdvance-2.jpg',
            'benefits' => '["Earth’s natural heartbeat rhythm is the frequency of 7.83 Hz", "Tunes Alpha/Theta brainwave frequencies", "Feel relaxed, dreamy, sleepy state", "Helps with cell regeneration", "Balance your bio-electromagnetic waves", "EMF Protection"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Schumann Frequency 14.1 Hz Alpha Harmonics', 'filename' => '01. Schumann Frequency 14.1 Hz Alpha Harmonics.mp3'],
            ['name' => '02. Schumann Frequency 20.8 Hz Beta Harmonics', 'filename' => '02. Schumann Frequency 20.8 Hz Beta Harmonics.mp3'],
            ['name' => '03. Schumann Frequency 27.3 Hz Beta Harmonics', 'filename' => '03. Schumann Frequency 27.3 Hz Beta Harmonics.mp3'],
            ['name' => '04. Schumann Frequency 33.8 Hz Gamma Harmonics', 'filename' => '04. Schumann Frequency 33.8 Hz Gamma Harmonics.mp3'],
            ['name' => '05. Schumann Frequency 39 Hz Gamma Harmonics', 'filename' => '05. Schumann Frequency 39 Hz Gamma Harmonics.mp3'],
            ['name' => '06. Schumann Frequency 45 Hz Gamma Harmonics', 'filename' => '06. Schumann Frequency 45 Hz Gamma Harmonics.mp3'],
            ['name' => '07. Schumann Frequency 7.83 Hz Theta Harmonics', 'filename' => '07. Schumann Frequency 7.83 Hz Theta Harmonics.mp3'],
            ['name' => '08. True Earth Frequency 7.49 Hz Theta Harmonics', 'filename' => '08. True Earth Frequency 7.49 Hz Theta Harmonics.mp3'],
        ]);

        $album = Album::create(['order' => 60, 'category_id' => 1,
            'name' => 'Star Frequencies (Outer Body Meditation)', 'audio_folder' => '07. Star Frequencies (Outer Body Meditation)', 'image' => 'StarFrequencies-2.jpg',
            'benefits' => '["Establish a stronger connection to you higher mind", "Your spirit guides and cosmic guidance", "Opens your third eye", "Enhances your intuition", "Connects you to your life purpose", "Deep relaxation"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Alpha Centauri', 'filename' => '01. Alpha Centauri.mp3'],
            ['name' => '02. Antares', 'filename' => '02. Antares.mp3'],
            ['name' => '03. Arcturus', 'filename' => '03. Arcturus.mp3'],
            ['name' => '04. Betelgeuse', 'filename' => '04. Betelgeuse.mp3'],
            ['name' => '05. Canopus', 'filename' => '05. Canopus.mp3'],
            ['name' => '06. Pleiades Alcyone', 'filename' => '06. Pleiades Alcyone.mp3'],
            ['name' => '07. Pleiades Celaeno', 'filename' => '07. Pleiades Celaeno.mp3'],
            ['name' => '08. Pleiades Maia', 'filename' => '08. Pleiades Maia.mp3'],
            ['name' => '09. Pleiades Merope', 'filename' => '09. Pleiades Merope.mp3'],
            ['name' => '10. Pleiades Pleione', 'filename' => '10. Pleiades Pleione.mp3'],
            ['name' => '11. Polaris', 'filename' => '11. Polaris.mp3'],
            ['name' => '12. Rigel', 'filename' => '12. Rigel.mp3'],
            ['name' => '13. Sirius AB', 'filename' => '13. Sirius AB.mp3'],
            ['name' => '14. Spica', 'filename' => '14. Spica.mp3'],
            ['name' => '15. Vega', 'filename' => '15. Vega.mp3'],
            ['name' => '16. Alpha Centauri Triangle', 'filename' => '16. Alpha Centauri Triangle.mp3'],
            ['name' => '17. Antares Triangle', 'filename' => '17. Antares Triangle.mp3'],
            ['name' => '18. Arcturus Triangle', 'filename' => '18. Arcturus Triangle.mp3'],
            ['name' => '19. Betelgeuse Triangle', 'filename' => '19. Betelgeuse Triangle.mp3'],
            ['name' => '20. Canopus Triangle', 'filename' => '20. Canopus Triangle.mp3'],
            ['name' => '21. Pleiades Alcyone Triangle', 'filename' => '21. Pleiades Alcyone Triangle.mp3'],
            ['name' => '22. Pleiades Celaeno Triangle', 'filename' => '22. Pleiades Celaeno Triangle.mp3'],
            ['name' => '23. Pleiades Maia Triangle', 'filename' => '23. Pleiades Maia Triangle.mp3'],
            ['name' => '24. Pleiades Merope Triangle', 'filename' => '24. Pleiades Merope Triangle.mp3'],
            ['name' => '25. Pleiades Pleione Triangle', 'filename' => '25. Pleiades Pleione Triangle.mp3'],
            ['name' => '26. Polaris Triangle', 'filename' => '26. Polaris Triangle.mp3'],
            ['name' => '27. Rigel Triangle', 'filename' => '27. Rigel Triangle.mp3'],
            ['name' => '28. Sirius AB Triangle', 'filename' => '28. Sirius AB Triangle.mp3'],
            ['name' => '29. Spica Triangle', 'filename' => '29. Spica Triangle.mp3'],
            ['name' => '30. Vega Triangle', 'filename' => '30. Vega Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 180, 'category_id' => 4,
            'name' => 'Brainwave Enhancement', 'audio_folder' => '01. Brainwave Enhancement', 'image' => 'Brain Boost Bundle-1-.jpg',
            'benefits' => '["Make you smarter", "Increases synchronicity of delta brain waves (1.618)", "Opens unused parts of your brain", "Tunes your brain waves to the perfect golden ratio", "Increase logical, emotional, and spiritual intelligence", "Experience relaxed focus"]'
        ]);
        $album->tags()->attach([2]);
        $album->tracks()->createMany([
            ['name' => '01. Alpha (Relaxation)', 'filename' => '01. Alpha (Relaxation).mp3'],
            ['name' => '02. Beta (Focus)', 'filename' => '02. Beta (Focus).mp3'],
            ['name' => '03. Delta (Sleep, Healing)', 'filename' => '03. Delta (Sleep, Healing).mp3'],
            ['name' => '04. Gamma (Heightened Perception)', 'filename' => '04. Gamma (Heightened Perception).mp3'],
            ['name' => '05. High Gamma (Heightened Perception)', 'filename' => '05. High Gamma (Heightened Perception).mp3'],
            ['name' => '06. Theta (Dream, Meditation)', 'filename' => '06. Theta (Dream, Meditation).mp3'],
            ['name' => '07. Alpha (Relaxation) Triangle', 'filename' => '07. Alpha (Relaxation) Triangle.mp3'],
            ['name' => '08. Beta (Focus) Triangle', 'filename' => '08. Beta (Focus) Triangle.mp3'],
            ['name' => '09. Delta (Sleep, Healing) Triangle', 'filename' => '09. Delta (Sleep, Healing) Triangle.mp3'],
            ['name' => '10. Gamma (Heightened Perception) Triangle', 'filename' => '10. Gamma (Heightened Perception) Triangle.mp3'],
            ['name' => '11. High Gamma (Heightened Perception) Triangle', 'filename' => '11. High Gamma (Heightened Perception) Triangle.mp3'],
            ['name' => '12. Theta (Dream, Meditation) Triangle', 'filename' => '12. Theta (Dream, Meditation) Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 190, 'category_id' => 4,
            'name' => 'True Phi Brain Focus Concentration', 'audio_folder' => '02. True Phi Brain Focus Concentration', 'image' => 'Brain Boost Bundle-2-.jpg',
            'benefits' => '["Increases synchronicity of delta brain waves (1.618)", "Opens unused parts of your brain", "Tunes your brain waves to the perfect golden ratio", "Increase the balance of your brain", "Make you smarter, increase intelligence", "Experience relaxed and focus"]'
        ]);
        $album->tags()->attach([2, 5]);
        $album->tracks()->createMany([
            ['name' => '01. True Phi Brain Focus High', 'filename' => '01. True Phi Brain Focus High.mp3'],
            ['name' => '02. True Phi Brain Focus Low', 'filename' => '02. True Phi Brain Focus Low.mp3'],
            ['name' => '03. True Phi Brain Focus High Triangle', 'filename' => '03. True Phi Brain Focus High Triangle.mp3'],
            ['name' => '04. True Phi Brain Focus Low Triangle', 'filename' => '04. True Phi Brain Focus Low Triangle.mp3'],
        ]);

        $album = Album::create(['order' => 200, 'category_id' => 4,
            'name' => 'Pineal Gland Activation (Third Eye Awakening)', 'audio_folder' => '03. Pineal Gland Activation (Third Eye Awakening)', 'image' => 'Brain Boost Bundle-3-.jpg',
            'benefits' => '["Increase brain creativity", "Develop Intuition, Insight and Imagination", "See with your mind\'s eye", "Decalcify and clear your pineal gland!", "Open your third eye", "Literally make your mind brighter. Enhance memory"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Pineal Gland 1', 'filename' => '01. Pineal Gland 1.mp3'],
            ['name' => '02. Pineal Gland 2', 'filename' => '02. Pineal Gland 2.mp3'],
            ['name' => '03. Pineal Gland Harmonic 1', 'filename' => '03. Pineal Gland Harmonic 1.mp3'],
            ['name' => '04. Pineal Gland Harmonic 2', 'filename' => '04. Pineal Gland Harmonic 2.mp3'],
            ['name' => '05. Pineal Gland Triangle 1', 'filename' => '05. Pineal Gland Triangle 1.mp3'],
            ['name' => '06. Pineal Gland Triangle 2', 'filename' => '06. Pineal Gland Triangle 2.mp3'],
            ['name' => '07. Pineal Gland Triangle Harmonic 1', 'filename' => '07. Pineal Gland Triangle Harmonic 1.mp3'],
            ['name' => '08. Pineal Gland Triangle Harmonic 2', 'filename' => '08. Pineal Gland Triangle Harmonic 2.mp3'],
        ]);

        // Solfeggio

        $album = Album::create(['order' => 210, 'category_id' => 39,
            'name' => 'Solfeggio 174 - Relaxation', 'audio_folder' => '01. Solfeggio 174 - Pain Management', 'image' => 'Total Transformation Solfeggio Frequencies-1-.jpg',
            'benefits' => '["Relaxing effect, soothes discomfort", "Improves mood and overall feeling", "Improve health and well-being", "Enhances the emotional power ", "encourages the sense of safety, love, and courage"]'
        ]);
        $album->tags()->attach([4, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 174 Sine', 'filename' => '01. 174 Sine.mp3'],
            ['name' => '02. 174 Slow Pulse', 'filename' => '02. 174 Slow Pulse.mp3'],
            ['name' => '03. 174 Steady Pulse', 'filename' => '03. 174 Steady Pulse.mp3'],
            ['name' => '04. 174 Fast Pulse', 'filename' => '04. 174 Fast Pulse.mp3'],
            ['name' => '05. 174 Rotating Pulse', 'filename' => '05. 174 Rotating Pulse.mp3'],
            ['name' => '06. 174 Saw Triangle Pulse', 'filename' => '06. 174 Saw Triangle Pulse.mp3'],
            ['name' => '07. 174 Square', 'filename' => '07. 174 Square.mp3'],
            ['name' => '08. 174 Square Trance', 'filename' => '08. 174 Square Trance.mp3'],
            ['name' => '09. 174 Square Sine Pulse', 'filename' => '09. 174 Square Sine Pulse.mp3'],
            ['name' => '10. 174 Sawtooth', 'filename' => '10. 174 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 220, 'category_id' => 39,
            'name' => 'Solfeggio 285 - Deep Healing from Within', 'audio_folder' => '02. Solfeggio 285 - Deep Healing from Within', 'image' => 'Total Transformation Solfeggio Frequencies-2-.jpg',
            'benefits' => '["Influence energy field around you", "Transformation of human body and soul", "Enhances the immune system", "Optimal health and physical well-being"]'
        ]);
        $album->tags()->attach([4, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 285 Sine', 'filename' => '01. 285 Sine.mp3'],
            ['name' => '02. 285 Slow Pulse', 'filename' => '02. 285 Slow Pulse.mp3'],
            ['name' => '03. 285 Steady Pulse', 'filename' => '03. 285 Steady Pulse.mp3'],
            ['name' => '04. 285 Fast Pulse', 'filename' => '04. 285 Fast Pulse.mp3'],
            ['name' => '05. 285 Rotating Pulse', 'filename' => '05. 285 Rotating Pulse.mp3'],
            ['name' => '06. 285 Saw Triangle Pulse', 'filename' => '06. 285 Saw Triangle Pulse.mp3'],
            ['name' => '07. 285 Square', 'filename' => '07. 285 Square.mp3'],
            ['name' => '08. 285 Square Trance', 'filename' => '08. 285 Square Trance.mp3'],
            ['name' => '09. 285 Square Sine Pulse', 'filename' => '09. 285 Square Sine Pulse.mp3'],
            ['name' => '10. 285 Sawtooth', 'filename' => '10. 285 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 230, 'category_id' => 39,
            'name' => 'Solfeggio 396 - Liberation of Guilt & Fear', 'audio_folder' => '03. Solfeggio 396 - Liberation of Guilt & Fear', 'image' => 'Total Transformation Solfeggio Frequencies-3-.jpg',
            'benefits' => '["Gives power to your goals", "Eradicates the feeling of guilt, both conscious and subconcious", "Helps overcome the fear that hinders from realizing our dreams and goals", "Liberates from subconscious negative beliefs and thoughts", "Used for balancing Root Chakra"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 396 Sine', 'filename' => '01. 396 Sine.mp3'],
            ['name' => '02. 396 Slow Pulse', 'filename' => '02. 396 Slow Pulse.mp3'],
            ['name' => '03. 396 Steady Pulse', 'filename' => '03. 396 Steady Pulse.mp3'],
            ['name' => '04. 396 Fast Pulse', 'filename' => '04. 396 Fast Pulse.mp3'],
            ['name' => '05. 396 Rotating Pulse', 'filename' => '05. 396 Rotating Pulse.mp3'],
            ['name' => '06. 396 Saw Triangle Pulse', 'filename' => '06. 396 Saw Triangle Pulse.mp3'],
            ['name' => '07. 396 Square', 'filename' => '07. 396 Square.mp3'],
            ['name' => '08.396 Square Trance', 'filename' => '08.396 Square Trance.mp3'],
            ['name' => '09. 396 Square Sine Pulse', 'filename' => '09. 396 Square Sine Pulse.mp3'],
            ['name' => '10. 396 Sawtooth', 'filename' => '10. 396 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 240, 'category_id' => 39,
            'name' => 'Solfeggio 417 - Undoing Situations and Facilitating Change', 'audio_folder' => '04. Solfeggio 417 - Undoing Situations and Facilitating Change', 'image' => 'Total Transformation Solfeggio Frequencies-4-.jpg',
            'benefits' => '["Remove negative energy from the body and surroundings", "Remove negative thoughts and behavior patterns", "Undo situations with negative outcomes", "Facilitate change in you and others", "Helps in recovering from trauma", "Used for balancing Sacral Chakra"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 417 Sine', 'filename' => '01. 417 Sine.mp3'],
            ['name' => '02. 417 Slow Pulse', 'filename' => '02. 417 Slow Pulse.mp3'],
            ['name' => '03. 417 Steady Pulse', 'filename' => '03. 417 Steady Pulse.mp3'],
            ['name' => '04. 417 Fast Pulse', 'filename' => '04. 417 Fast Pulse.mp3'],
            ['name' => '05. 417 Rotating Pulse', 'filename' => '05. 417 Rotating Pulse.mp3'],
            ['name' => '06. 417 Saw Triangle Pulse', 'filename' => '06. 417 Saw Triangle Pulse.mp3'],
            ['name' => '07. 417 Square', 'filename' => '07. 417 Square.mp3'],
            ['name' => '08. 417 Square Trance', 'filename' => '08. 417 Square Trance.mp3'],
            ['name' => '09. 417 Square Sine Pulse', 'filename' => '09. 417 Square Sine Pulse.mp3'],
            ['name' => '10. 417 Sawtooth', 'filename' => '10. 417 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 250, 'category_id' => 39,
            'name' => 'Solfeggio 528 - Transformation and Miracles (DNA Repair)', 'audio_folder' => '05. Solfeggio 528 - Transformation and Miracles (DNA Repair)', 'image' => 'Total Transformation Solfeggio Frequencies-5-.jpg',
            'benefits' => '["Returns DNA to its original, perfect state", "Brings transformation and miracles into your life", "Energy booster", "Helps in balancing and tuning Solar Plexus Chakra", "Improves self confidence and self-esteem"]'
        ]);
        $album->tags()->attach([1, 4, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 528 Sine', 'filename' => '01. 528 Sine.mp3'],
            ['name' => '02. 528 Slow Pulse', 'filename' => '02. 528 Slow Pulse.mp3'],
            ['name' => '03. 528 Steady Pulse', 'filename' => '03. 528 Steady Pulse.mp3'],
            ['name' => '04. 528 Fast Pulse', 'filename' => '04. 528 Fast Pulse.mp3'],
            ['name' => '05. 528 Rotating Pulse', 'filename' => '05. 528 Rotating Pulse.mp3'],
            ['name' => '06. 528 Saw Triangle Pulse', 'filename' => '06. 528 Saw Triangle Pulse.mp3'],
            ['name' => '07. 528 Square', 'filename' => '07. 528 Square.mp3'],
            ['name' => '08. 528 Square Trance', 'filename' => '08. 528 Square Trance.mp3'],
            ['name' => '09. 528 Square Sine Pulse', 'filename' => '09. 528 Square Sine Pulse.mp3'],
            ['name' => '10. 528 Sawtooth', 'filename' => '10. 528 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 260, 'category_id' => 39,
            'name' => 'Solfeggio 639 - Connecting and Relationships', 'audio_folder' => '06. Solfeggio 639 - Connecting and Relationships', 'image' => 'Total Transformation Solfeggio Frequencies-6-.jpg',
            'benefits' => '["Enables the creation of harmonious interpersonal relationships", "Helps in dealing with relationship problems - family, between partners, friends", "Encourages the cell to communicate with its environment", "Enhances communication, understanding, tolerance, and love", "Used for balancing Heart Chakra"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 639 Sine', 'filename' => '01. 639 Sine.mp3'],
            ['name' => '02. 639 Slow Pulse', 'filename' => '02. 639 Slow Pulse.mp3'],
            ['name' => '03. 639 Steady Pulse', 'filename' => '03. 639 Steady Pulse.mp3'],
            ['name' => '04. 639 Fast Pulse', 'filename' => '04. 639 Fast Pulse.mp3'],
            ['name' => '05. 639 Rotating Pulse', 'filename' => '05. 639 Rotating Pulse.mp3'],
            ['name' => '06. 639 Saw Triangle Pulse', 'filename' => '06. 639 Saw Triangle Pulse.mp3'],
            ['name' => '07. 639 Square', 'filename' => '07. 639 Square.mp3'],
            ['name' => '08. 639 Square Trance', 'filename' => '08. 639 Square Trance.mp3'],
            ['name' => '09. 639 Square Sine Pulse', 'filename' => '09. 639 Square Sine Pulse.mp3'],
            ['name' => '10. 639 Sawtooth', 'filename' => '10. 639 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 270, 'category_id' => 39,
            'name' => 'Solfeggio 741 - Intuition and Divine Knowledge', 'audio_folder' => '07. Solfeggio 741 - Intuition and Divine Knowledge', 'image' => 'Total Transformation Solfeggio Frequencies-7-.jpg',
            'benefits' => '["Purifies the mind and body", "Promotes expression and solutions", "Used for balancing Throat Chakra", "EMF Protection", "Leads you to pure, stable and spiritual life"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 741 Sine', 'filename' => '01. 741 Sine.mp3'],
            ['name' => '02. 741 Slow Pulse', 'filename' => '02. 741 Slow Pulse.mp3'],
            ['name' => '03. 741 Steady Pulse', 'filename' => '03. 741 Steady Pulse.mp3'],
            ['name' => '04. 741 Fast Pulse', 'filename' => '04. 741 Fast Pulse.mp3'],
            ['name' => '05. 741 Rotating Pulse', 'filename' => '05. 741 Rotating Pulse.mp3'],
            ['name' => '06. 741 Saw Triangle Pulse', 'filename' => '06. 741 Saw Triangle Pulse.mp3'],
            ['name' => '07. 741 Square', 'filename' => '07. 741 Square.mp3'],
            ['name' => '08. 741 Square Trance', 'filename' => '08. 741 Square Trance.mp3'],
            ['name' => '09. 741 Square Sine Pulse', 'filename' => '09. 741 Square Sine Pulse.mp3'],
            ['name' => '10. 741 Sawtooth', 'filename' => '10. 741 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 280, 'category_id' => 39,
            'name' => 'Solfeggio 852 - Inner Strength Awakening & Self Realization', 'audio_folder' => '08. Solfeggio 852 - Inner Strength Awakening & Self Realization', 'image' => 'Total Transformation Solfeggio Frequencies-8-.jpg',
            'benefits' => '["Helps to return to spiritual order", "Awakens intuition and inner strength", "Cleanse Your Mind", "Let go of negative energy, patterns, fear & overthinking", "Used for balancing Third Eye Chakra"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 852 Sine', 'filename' => '01. 852 Sine.mp3'],
            ['name' => '02. 852 Slow Pulse', 'filename' => '02. 852 Slow Pulse.mp3'],
            ['name' => '03. 852 Steady Pulse', 'filename' => '03. 852 Steady Pulse.mp3'],
            ['name' => '04. 852 Fast Pulse', 'filename' => '04. 852 Fast Pulse.mp3'],
            ['name' => '05. 852 Rotating Pulse', 'filename' => '05. 852 Rotating Pulse.mp3'],
            ['name' => '06. 852 Saw Triangle Pulse', 'filename' => '06. 852 Saw Triangle Pulse.mp3'],
            ['name' => '07. 852 Square', 'filename' => '07. 852 Square.mp3'],
            ['name' => '08. 852 Square Trance', 'filename' => '08. 852 Square Trance.mp3'],
            ['name' => '09. 852 Square Sine Pulse', 'filename' => '09. 852 Square Sine Pulse.mp3'],
            ['name' => '10. 852 Sawtooth', 'filename' => '10. 852 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 290, 'category_id' => 39,
            'name' => 'Solfeggio 963 - Higher Mind Activation', 'audio_folder' => '09. Solfeggio 963 - Higher Mind Activation', 'image' => 'Total Transformation Solfeggio Frequencies-9-.jpg',
            'benefits' => '["Awakens any system to its original, perfect state", "Enables transformation of the body to a higher level", "Reconnects you with the non-vibrational energies", "Used for balancing Crown Chakra"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. 963 Sine', 'filename' => '01. 963 Sine.mp3'],
            ['name' => '02. 963 Slow Pulse', 'filename' => '02. 963 Slow Pulse.mp3'],
            ['name' => '03. 963 Steady Pulse', 'filename' => '03. 963 Steady Pulse.mp3'],
            ['name' => '04. 963 Fast Pulse', 'filename' => '04. 963 Fast Pulse.mp3'],
            ['name' => '05. 963 Rotating Pulse', 'filename' => '05. 963 Rotating Pulse.mp3'],
            ['name' => '06. 963 Saw Triangle Pulse', 'filename' => '06. 963 Saw Triangle Pulse.mp3'],
            ['name' => '07. 963 Square', 'filename' => '07. 963 Square.mp3'],
            ['name' => '08. 963 Square Trance', 'filename' => '08. 963 Square Trance.mp3'],
            ['name' => '09. 963 Square Sine Pulse', 'filename' => '09. 963 Square Sine Pulse.mp3'],
            ['name' => '10. 963 Sawtooth', 'filename' => '10. 963 Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 300, 'category_id' => 39,
            'name' => 'Solfeggio', 'audio_folder' => '10. Solfeggio', 'image' => 'Solfeggio.png',
            'benefits' => '["Impart spiritual blessings", "Balances energy", "Keeps the spirit, mind and body in a perfect harmony", "Balances the following Chakras: Root, Sacral, Solar Plexus, Heart, Third Eye Chakras"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '01. Solfeggio Quantum Frequencies 396', 'filename' => '01. Solfeggio Quantum Frequencies 396.mp3'],
            ['name' => '02. Solfeggio Quantum Frequencies 417', 'filename' => '02. Solfeggio Quantum Frequencies 417.mp3'],
            ['name' => '03. Solfeggio Quantum Frequencies 518', 'filename' => '03. Solfeggio Quantum Frequencies 518.mp3'],
            ['name' => '04. Solfeggio Quantum Frequencies 639', 'filename' => '04. Solfeggio Quantum Frequencies 639.mp3'],
            ['name' => '05. Solfeggio Quantum Frequencies 741', 'filename' => '05. Solfeggio Quantum Frequencies 741.mp3'],
            ['name' => '06. Solfeggio Quantum Frequencies 852', 'filename' => '06. Solfeggio Quantum Frequencies 852.mp3'],
        ]);

        // Chakra Balancing

        $album = Album::create(['order' => 310, 'category_id' => 40,
            'name' => 'Root Chakra 228', 'audio_folder' => '01. Root Chakra 228', 'image' => 'Ultimate Chakra Series-1-.jpg',
            'benefits' => '["Improves energy and vigor", "Increses feeling of security and safety in your life", "Improves lower back and leg problems", "Helps improve organization and self discipline", "Feel focused, relaxed, grounded, centered"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '228 Fast Pulse', 'filename' => '228 Fast Pulse.mp3'],
            ['name' => '228 Rotating Pulse', 'filename' => '228 Rotating Pulse.mp3'],
            ['name' => '228 Saw Triangle Pulse', 'filename' => '228 Saw Triangle Pulse.mp3'],
            ['name' => '228 Sawtooth', 'filename' => '228 Sawtooth.mp3'],
            ['name' => '228 Sine', 'filename' => '228 Sine.mp3'],
            ['name' => '228 Slow Pulse', 'filename' => '228 Slow Pulse.mp3'],
            ['name' => '228 Square Sine Pulse', 'filename' => '228 Square Sine Pulse.mp3'],
            ['name' => '228 Square Trance', 'filename' => '228 Square Trance.mp3'],
            ['name' => '228 Square', 'filename' => '228 Square.mp3'],
            ['name' => '228 Steady Pulse', 'filename' => '228 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 320, 'category_id' => 40,
            'name' => 'Sacral Chakra 303', 'audio_folder' => '02. Sacral Chakra 303', 'image' => 'Ultimate-Chakra-Series-2-no-url.png',
            'benefits' => '["Improves mood and increases positive feelings", "Build and improve confidence, socialbility and sensuality", "Improves uterine problems, eating disorders, allergies and impotence", "Helps in reducing anxiety and depression", "Self-worth realization", "Improves creativity and emotional expression"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '303 Hz Fast Pulse', 'filename' => '303 Hz Fast Pulse.mp3'],
            ['name' => '303 Hz Rotating Pulse', 'filename' => '303 Hz Rotating Pulse.mp3'],
            ['name' => '303 Hz Saw Triangle Pulse', 'filename' => '303 Hz Saw Triangle Pulse.mp3'],
            ['name' => '303 Hz Sawtooth', 'filename' => '303 Hz Sawtooth.mp3'],
            ['name' => '303 Hz Sine', 'filename' => '303 Hz Sine.mp3'],
            ['name' => '303 Hz Slow Pulse', 'filename' => '303 Hz Slow Pulse.mp3'],
            ['name' => '303 Hz Square Sine Pulse', 'filename' => '303 Hz Square Sine Pulse.mp3'],
            ['name' => '303 Hz Square Trance', 'filename' => '303 Hz Square Trance.mp3'],
            ['name' => '303 Hz Square', 'filename' => '303 Hz Square.mp3'],
            ['name' => '303 Hz Steady Pulse', 'filename' => '303 Hz Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 330, 'category_id' => 40,
            'name' => 'Solar Plexus Chakra 182', 'audio_folder' => '03. Solar Plexus Chakra 182', 'image' => 'Ultimate Chakra Series-3-.jpg',
            'benefits' => '["Increases self-esteem and vitality", "Reduces feeling of anxiety", "Improves mood, mental clarity and increases optimistic thoughts", "Helps in developing self-control and awareness"]'
        ]);
        $album->tags()->attach([5]);
        $album->tracks()->createMany([
            ['name' => '182 Fast Pulse', 'filename' => '182 Fast Pulse.mp3'],
            ['name' => '182 Rotating Pulse', 'filename' => '182 Rotating Pulse.mp3'],
            ['name' => '182 Saw Triangle Pulse', 'filename' => '182 Saw Triangle Pulse.mp3'],
            ['name' => '182 Sawtooth', 'filename' => '182 Sawtooth.mp3'],
            ['name' => '182 Sine', 'filename' => '182 Sine.mp3'],
            ['name' => '182 Slow Pulse', 'filename' => '182 Slow Pulse.mp3'],
            ['name' => '182 Square Sine Pulse', 'filename' => '182 Square Sine Pulse.mp3'],
            ['name' => '182 Square Trance', 'filename' => '182 Square Trance.mp3'],
            ['name' => '182 Square', 'filename' => '182 Square.mp3'],
            ['name' => '182 Steady Pulse', 'filename' => '182 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 340, 'category_id' => 40,
            'name' => 'Heart Chakra 128', 'audio_folder' => '04. Heart Chakra 128', 'image' => 'Ultimate Chakra Series-4-.jpg',
            'benefits' => '["Feel surrounded by love, compassion, and joy", "Reconnect to the world around you", "Helps in dealing with grief, relationship issues", "Overcome trust issues", "Helps heal from emotional abuse, abandonment"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => '128 Fast Pulse', 'filename' => '128 Fast Pulse.mp3'],
            ['name' => '128 Rotating Pulse', 'filename' => '128 Rotating Pulse.mp3'],
            ['name' => '128 Saw Triangle Pulse', 'filename' => '128 Saw Triangle Pulse.mp3'],
            ['name' => '128 Sawtooth', 'filename' => '128 Sawtooth.mp3'],
            ['name' => '128 Sine', 'filename' => '128 Sine.mp3'],
            ['name' => '128 Slow Pulse', 'filename' => '128 Slow Pulse.mp3'],
            ['name' => '128 Square Sine Pulse', 'filename' => '128 Square Sine Pulse.mp3'],
            ['name' => '128 Square Trance', 'filename' => '128 Square Trance.mp3'],
            ['name' => '128 Square', 'filename' => '128 Square.mp3'],
            ['name' => '128 Steady Pulse', 'filename' => '128 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 350, 'category_id' => 40,
            'name' => 'Throat Chakra 192', 'audio_folder' => '05. Throat Chakra 192', 'image' => 'Ultimate Chakra Series-5-.jpg',
            'benefits' => '["Increase creativity, expression and personal expansion", "Helps improve organization, communication and wisdom", "Supports Thyroid gland", "Promotes your ability to be honest and expressing your thoughts"]'
        ]);
        $album->tags()->attach([5]);
        $album->tracks()->createMany([
            ['name' => '192 Fast Pulse', 'filename' => '192 Fast Pulse.mp3'],
            ['name' => '192 Rotating Pulse', 'filename' => '192 Rotating Pulse.mp3'],
            ['name' => '192 Saw Triangle Pulse', 'filename' => '192 Saw Triangle Pulse.mp3'],
            ['name' => '192 Sawtooth', 'filename' => '192 Sawtooth.mp3'],
            ['name' => '192 Sine', 'filename' => '192 Sine.mp3'],
            ['name' => '192 Slow Pulse', 'filename' => '192 Slow Pulse.mp3'],
            ['name' => '192 Square Sine Pulse', 'filename' => '192 Square Sine Pulse.mp3'],
            ['name' => '192 Square Trance', 'filename' => '192 Square Trance.mp3'],
            ['name' => '192 Square', 'filename' => '192 Square.mp3'],
            ['name' => '192 Steady Pulse', 'filename' => '192 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 360, 'category_id' => 40,
            'name' => 'Third Eye Chakra 144', 'audio_folder' => '06. Third Eye Chakra 144', 'image' => 'Ultimate Chakra Series-6-.jpg',
            'benefits' => '["Gain insight and intuition", "Access higher consciousness and inner wisdom", "Help gain clarity and truth", "Develop psychic and extrasensory perception", "Help gain self realization, fearlessness and self-confidence"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => '144 Fast Pulse', 'filename' => '144 Fast Pulse.mp3'],
            ['name' => '144 Rotating Pulse', 'filename' => '144 Rotating Pulse.mp3'],
            ['name' => '144 Saw Triangle Pulse', 'filename' => '144 Saw Triangle Pulse.mp3'],
            ['name' => '144 Sawtooth', 'filename' => '144 Sawtooth.mp3'],
            ['name' => '144 Sine', 'filename' => '144 Sine.mp3'],
            ['name' => '144 Slow Pulse', 'filename' => '144 Slow Pulse.mp3'],
            ['name' => '144 Square Sine Pulse', 'filename' => '144 Square Sine Pulse.mp3'],
            ['name' => '144 Square Trance', 'filename' => '144 Square Trance.mp3'],
            ['name' => '144 Square', 'filename' => '144 Square.mp3'],
            ['name' => '144 Steady Pulse', 'filename' => '144 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 370, 'category_id' => 40,
            'name' => 'Crown Chakra 216', 'audio_folder' => '07. Crown Chakra 216', 'image' => 'Ultimate Chakra Series-7-.jpg',
            'benefits' => '["Connect to your spirituality, higher self & higher consciousness", "Purifies thoughts and feelings", "Brings honesty and pureness of decisions", "Promotes balanced judgements annd unprejudiced decisions", "Promotes wisdom, awareness and charisma", "Supports Pineal gland"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => '216 Fast Pulse', 'filename' => '216 Fast Pulse.mp3'],
            ['name' => '216 Rotating Pulse', 'filename' => '216 Rotating Pulse.mp3'],
            ['name' => '216 Saw Triangle Pulse', 'filename' => '216 Saw Triangle Pulse.mp3'],
            ['name' => '216 Sawtooth', 'filename' => '216 Sawtooth.mp3'],
            ['name' => '216 Sine', 'filename' => '216 Sine.mp3'],
            ['name' => '216 Slow Pulse', 'filename' => '216 Slow Pulse.mp3'],
            ['name' => '216 Square Sine Pulse', 'filename' => '216 Square Sine Pulse.mp3'],
            ['name' => '216 Square Trance', 'filename' => '216 Square Trance.mp3'],
            ['name' => '216 Square', 'filename' => '216 Square.mp3'],
            ['name' => '216 Steady Pulse', 'filename' => '216 Steady Pulse.mp3'],
        ]);

        $album = Album::create(['order' => 380, 'category_id' => 40,
            'name' => '7 Chakra Tune Up - Activation And Balancing', 'audio_folder' => '08. 7 Chakra Tune Up - Activation And Balancing', 'image' => 'Ultimate Chakra Series-9-.jpg',
            'benefits' => '["Balance all your chakras", "Develop balance and harmony in life", "Get good health and improve overall wellness", "Improve self-esteem, security and overall energy", "Helps with relationships and connectedness", "Helps with self-expression and communication"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => '01. Crown Chakra 216', 'filename' => '01. Crown Chakra 216.mp3'],
            ['name' => '02. Third Eye Chakra 144', 'filename' => '02. Third Eye Chakra 144.mp3'],
            ['name' => '03. Throat Chakra 192', 'filename' => '03. Throat Chakra 192.mp3'],
            ['name' => '04. Heart Chakra 128', 'filename' => '04. Heart Chakra 128.mp3'],
            ['name' => '05. Solar Plexus Chakra 182', 'filename' => '05. Solar Plexus Chakra 182.mp3'],
            ['name' => '06. Sacral Chakra 303', 'filename' => '06. Sacral Chakra 303.mp3'],
            ['name' => '07. Root Chakra 228', 'filename' => '07. Root Chakra 228.mp3'],
        ]);

        // RIFE

        // General

        $album = Album::create(['order' => 400, 'category_id' => 5,
            'name' => 'PEMF Therapy Frequencies', 'audio_folder' => '06. PEMF Therapy Frequencies', 'image' => 'MAIN-PEMF Therapy Frequencies-.jpg',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => '01. PEMF 10 Hz - Cell Growth and Regeneration', 'filename' => '01. PEMF 10 Hz - Cell Growth and Regeneration.mp3'],
            ['name' => '02. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation', 'filename' => '02. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation.mp3'],
            ['name' => '03. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation', 'filename' => '03. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation.mp3'],
            ['name' => '04. PEMF 25 Hz - Nerve Regeneration', 'filename' => '04. PEMF 25 Hz - Nerve Regeneration.mp3'],
            ['name' => '05. PEMF 40 + 10 Hz - Pain, Inflammation', 'filename' => '05. PEMF 40 + 10 Hz - Pain, Inflammation.mp3'],
            ['name' => '06. PEMF 40 + 116 Hz - Pain, Inflammation', 'filename' => '06. PEMF 40 + 116 Hz - Pain, Inflammation.mp3'],
            ['name' => '07. PEMF 40 + 355 Hz - Pain, Inflammation', 'filename' => '07. PEMF 40 + 355 Hz - Pain, Inflammation.mp3'],
            ['name' => '08. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System', 'filename' => '08. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System.mp3'],
            ['name' => '09. PEMF 10 Hz - Cell Growth and Regeneration Square', 'filename' => '09. PEMF 10 Hz - Cell Growth and Regeneration Square.mp3'],
            ['name' => '10. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation Square', 'filename' => '10. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation Square.mp3'],
            ['name' => '11. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation Square', 'filename' => '11. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation Square.mp3'],
            ['name' => '12. PEMF 25 Hz - Nerve Regeneration Square', 'filename' => '12. PEMF 25 Hz - Nerve Regeneration Square.mp3'],
            ['name' => '13. PEMF 40 + 10 Hz - Pain, Inflammation Square', 'filename' => '13. PEMF 40 + 10 Hz - Pain, Inflammation Square.mp3'],
            ['name' => '14. PEMF 40 + 116 Hz - Pain, Inflammation Square', 'filename' => '14. PEMF 40 + 116 Hz - Pain, Inflammation Square.mp3'],
            ['name' => '15. PEMF 40 + 355 Hz - Pain, Inflammation Square', 'filename' => '15. PEMF 40 + 355 Hz - Pain, Inflammation Square.mp3'],
            ['name' => '16. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System Square', 'filename' => '16. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System Square.mp3'],
            ['name' => '17. PEMF 10 Hz - Cell Growth and Regeneration Sawtooth', 'filename' => '17. PEMF 10 Hz - Cell Growth and Regeneration Sawtooth.mp3'],
            ['name' => '18. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation Sawtooth', 'filename' => '18. PEMF 15 Hz - Healthier Skin, Osteoporosis, Blood Circulation Sawtooth.mp3'],
            ['name' => '19. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation Sawtooth', 'filename' => '19. PEMF 20 Hz - Healthier Skin, Bone Growth, Blood Circulation Sawtooth.mp3'],
            ['name' => '20. PEMF 25 Hz - Nerve Regeneration Sawtooth', 'filename' => '20. PEMF 25 Hz - Nerve Regeneration Sawtooth.mp3'],
            ['name' => '21. PEMF 40 + 10 Hz - Pain, Inflammation Sawtooth', 'filename' => '21. PEMF 40 + 10 Hz - Pain, Inflammation Sawtooth.mp3'],
            ['name' => '22. PEMF 40 + 116 Hz - Pain, Inflammation Sawtooth', 'filename' => '22. PEMF 40 + 116 Hz - Pain, Inflammation Sawtooth.mp3'],
            ['name' => '23. PEMF 40 + 355 Hz - Pain, Inflammation Sawtooth', 'filename' => '23. PEMF 40 + 355 Hz - Pain, Inflammation Sawtooth.mp3'],
            ['name' => '24. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System Sawtooth', 'filename' => '24. PEMF 50 Hz - Nerve Regeneration, White Blood Cell Duplication, Boost Immune System Sawtooth.mp3'],
        ]);

        $album = Album::create(['order' => 410, 'category_id' => 5,
            'name' => 'Rife Frequencies Starter Pack', 'audio_folder' => 'Rife Frequencies Starter Pack', 'image' => 'Rife-Frequencies-Starter-Pack.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Anti Bacteria - Rife Frequencies', 'filename' => 'Anti Bacteria - Rife Frequencies.mp3'],
            ['name' => 'Candida 1 - Rife Frequencies', 'filename' => 'Candida 1 - Rife Frequencies.mp3'],
            ['name' => 'Candida 2 - Rife Frequencies', 'filename' => 'Candida 2 - Rife Frequencies.mp3'],
            ['name' => 'Candida 3 - Rife Frequencies', 'filename' => 'Candida 3 - Rife Frequencies.mp3'],
            ['name' => 'Centering - Rife Frequencies', 'filename' => 'Centering - Rife Frequencies.mp3'],
            ['name' => 'Closing - Rife Frequencies', 'filename' => 'Closing - Rife Frequencies.mp3'],
            ['name' => 'Immune Booster - Rife Frequencies', 'filename' => 'Immune Booster - Rife Frequencies.mp3'],
            ['name' => 'Sleep on Demand - Rife Frequencies', 'filename' => 'Sleep on Demand - Rife Frequencies.mp3'],
        ]);

        // Appearance

        $album = Album::create(['order' => 415, 'category_id' => 6,
            'name' => 'Fitness', 'audio_folder' => 'Fitness', 'image' => 'Fitness.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Fat Burn', 'filename' => 'Fat Burn.mp3'],
            ['name' => 'Metabolism', 'filename' => 'Metabolism.mp3'],
            ['name' => 'Obesity', 'filename' => 'Obesity.mp3'],
            ['name' => 'Weight Loss', 'filename' => 'Weight Loss.mp3'],
        ]);

        $album = Album::create(['order' => 420, 'category_id' => 6,
            'name' => 'Anti Aging', 'audio_folder' => 'Anti Aging', 'image' => 'Anti Aging.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Anti Aging', 'filename' => 'Anti Aging.mp3'],
            ['name' => 'Collagen Building', 'filename' => 'Collagen Building.mp3'],
            ['name' => 'Facial Toning', 'filename' => 'Facial Toning.mp3'],
        ]);

        $album = Album::create(['order' => 425, 'category_id' => 6,
            'name' => 'Face and Skin Beauty', 'audio_folder' => 'Rife Frequencies for Face & Skin', 'image' => 'Face Skin Beauty.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Acne', 'filename' => 'Acne.mp3'],
            ['name' => 'Athletes Foot', 'filename' => 'Athletes Foot.mp3'],
            ['name' => 'Boils', 'filename' => 'Boils.mp3'],
            ['name' => 'Bruises', 'filename' => 'Bruises.mp3'],
            ['name' => 'Burns', 'filename' => 'Burns.mp3'],
            ['name' => 'Cancer, Basal Cell Carcinoma', 'filename' => 'Cancer, Basal Cell Carcinoma.mp3'],
            ['name' => 'Cancer, Melanoma', 'filename' => 'Cancer, Melanoma.mp3'],
            ['name' => 'Carbuncles', 'filename' => 'Carbuncles.mp3'],
            ['name' => 'Dandruff, Scales', 'filename' => 'Dandruff, Scales.mp3'],
            ['name' => 'Eczema (also see Herpes)', 'filename' => 'Eczema (also see Herpes).mp3'],
            ['name' => 'Erysipelas (Skin Inflammation)', 'filename' => 'Erysipelas (Skin Inflammation).mp3'],
            ['name' => 'Facial Cramps', 'filename' => 'Facial Cramps.mp3'],
            ['name' => 'Facial Paralysis', 'filename' => 'Facial Paralysis.mp3'],
            ['name' => 'Fascia (Fibrous Tissue Under Skin)', 'filename' => 'Fascia (Fibrous Tissue Under Skin).mp3'],
            ['name' => 'Foot, Blisters', 'filename' => 'Foot, Blisters.mp3'],
            ['name' => 'Frostbite', 'filename' => 'Frostbite.mp3'],
            ['name' => 'Hives (Urticaria)', 'filename' => 'Hives (Urticaria).mp3'],
            ['name' => 'Lupus Vulgaris', 'filename' => 'Lupus Vulgaris.mp3'],
            ['name' => 'Neuralgia', 'filename' => 'Neuralgia.mp3'],
            ['name' => 'Pruritus (Itching)', 'filename' => 'Pruritus (Itching).mp3'],
            ['name' => 'Psoriasis, Alternate Program', 'filename' => 'Psoriasis, Alternate Program.mp3'],
            ['name' => 'Psoriasis', 'filename' => 'Psoriasis.mp3'],
            ['name' => 'Rosacea', 'filename' => 'Rosacea.mp3'],
            ['name' => 'Skin Hemorrhages', 'filename' => 'Skin Hemorrhages.mp3'],
            ['name' => 'Tic, Facial', 'filename' => 'Tic, Facial.mp3'],
            ['name' => 'Warts, Plantar', 'filename' => 'Warts, Plantar.mp3'],
            ['name' => 'Warts', 'filename' => 'Warts.mp3'],
        ]);

        $album = Album::create(['order' => 430, 'category_id' => 6,
            'name' => 'Teeth & Gums', 'audio_folder' => 'Teeth & Gums', 'image' => 'Teeth Gums.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Dental Cavities', 'filename' => 'Dental Cavities.mp3'],
            ['name' => 'Dental Infections and Cavitations', 'filename' => 'Dental Infections and Cavitations.mp3'],
            ['name' => 'Gums, Inflammation', 'filename' => 'Gums, Inflammation.mp3'],
            ['name' => 'Periodontal Disease', 'filename' => 'Periodontal Disease.mp3'],
            ['name' => 'Pyorrhea and Trench Mouth', 'filename' => 'Pyorrhea and Trench Mouth.mp3'],
            ['name' => 'Scurvy - Lack of Vitamin C', 'filename' => 'Scurvy - Lack of Vitamin C.mp3'],
            ['name' => 'Spongy gums (see pyorrhea)', 'filename' => 'Spongy gums (see pyorrhea).mp3'],
            ['name' => 'Tooth Decay', 'filename' => 'Tooth Decay.mp3'],
            ['name' => 'Toothache', 'filename' => 'Toothache.mp3'],
        ]);

        $album = Album::create(['order' => 440, 'category_id' => 6,
            'name' => 'Head Hair & Scalp', 'audio_folder' => 'Head Hair & Scalp', 'image' => 'head-and-hair.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Alopecia (Hair Loss)', 'filename' => 'Alopecia (Hair Loss).mp3'],
            ['name' => 'Falling Hair', 'filename' => 'Falling Hair.mp3'],
            ['name' => 'Hair Loss', 'filename' => 'Hair Loss.mp3'],
            ['name' => 'Head Injury', 'filename' => 'Head Injury.mp3'],
            ['name' => 'Head, pressure in', 'filename' => 'Head, pressure in.mp3'],
            ['name' => 'Migraine', 'filename' => 'Migraine.mp3'],
            ['name' => 'Nausea 1', 'filename' => 'Nausea 1.mp3'],
            ['name' => 'Occipital Neuralgia', 'filename' => 'Occipital Neuralgia.mp3'],
        ]);

        // Mood

        $album = Album::create(['order' => 445, 'category_id' => 7,
            'name' => 'Better Mood', 'audio_folder' => 'Better Mood', 'image' => 'Better Mood.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Alcoholism', 'filename' => 'Alcoholism.mp3'],
            ['name' => 'Anger', 'filename' => 'Anger.mp3'],
            ['name' => 'Anxiety', 'filename' => 'Anxiety.mp3'],
            ['name' => 'Chronic Fatigue Syndrome', 'filename' => 'Chronic Fatigue Syndrome.mp3'],
            ['name' => 'Chronic Tired Feeling', 'filename' => 'Chronic Tired Feeling.mp3'],
            ['name' => 'Emotional Issues', 'filename' => 'Emotional Issues.mp3'],
            ['name' => 'Enuresis (Bed Wetting)', 'filename' => 'Enuresis (Bed Wetting).mp3'],
            ['name' => 'Hallucinations', 'filename' => 'Hallucinations.mp3'],
            ['name' => 'Hypochondria', 'filename' => 'Hypochondria.mp3'],
            ['name' => 'Hysterical Symptoms', 'filename' => 'Hysterical Symptoms.mp3'],
            ['name' => 'Insomnia', 'filename' => 'Insomnia.mp3'],
            ['name' => 'Intelligence, to Increase', 'filename' => 'Intelligence, to Increase.mp3'],
            ['name' => 'Irritability', 'filename' => 'Irritability.mp3'],
            ['name' => 'Lassitude, Weak, Exhausted', 'filename' => 'Lassitude, Weak, Exhausted.mp3'],
            ['name' => 'Melancholia', 'filename' => 'Melancholia.mp3'],
            ['name' => 'Nocturnal Emission', 'filename' => 'Nocturnal Emission.mp3'],
            ['name' => 'Sexual Weakness, Male & Female', 'filename' => 'Sexual Weakness, Male & Female.mp3'],
            ['name' => 'Sleeping Sickness', 'filename' => 'Sleeping Sickness.mp3'],
            ['name' => 'Stammering', 'filename' => 'Stammering.mp3'],
            ['name' => 'Unconsciousness', 'filename' => 'Unconsciousness.mp3'],
            ['name' => 'Worry', 'filename' => 'Worry.mp3'],
        ]);

        $album = Album::create(['order' => 450, 'category_id' => 7,
            'name' => 'Sleep & Relaxation', 'audio_folder' => 'Sleep & Relaxation', 'image' => 'Sleep Relaxation.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Deep Relaxation Sleep', 'filename' => 'Deep Relaxation Sleep.mp3'],
            ['name' => 'Insomnia', 'filename' => 'Insomnia.mp3'],
            ['name' => 'Mental Fatigue Relief', 'filename' => 'Mental Fatigue Relief.mp3'],
            ['name' => 'Muscles Relax', 'filename' => 'Muscles Relax.mp3'],
            ['name' => 'Sleep Apnea', 'filename' => 'Sleep Apnea.mp3'],
            ['name' => 'Sleeping', 'filename' => 'Sleeping.mp3'],
        ]);

        // Immune

        $album = Album::create(['order' => 460, 'category_id' => 8,
            'name' => 'Immune Boost', 'audio_folder' => 'Immune Boost', 'image' => 'Immune Boost.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Allergies', 'filename' => 'Allergies.mp3'],
            ['name' => 'Immune Boost', 'filename' => 'Immune Boost.mp3'],
            ['name' => 'Lupus', 'filename' => 'Lupus.mp3'],
            ['name' => 'Lymph Stasis', 'filename' => 'Lymph Stasis.mp3'],
            ['name' => 'Lymphatic System', 'filename' => 'Lymphatic System.mp3'],
            ['name' => 'Multiple Sclerosis', 'filename' => 'Multiple Sclerosis.mp3'],
            ['name' => 'Systemic Lupus Erythematosis', 'filename' => 'Systemic Lupus Erythematosis.mp3'],
            ['name' => 'Treat shigella and hepatitis C', 'filename' => 'Treat shigella and hepatitis C.mp3'],
        ]);

        $album = Album::create(['order' => 470, 'category_id' => 8,
            'name' => 'Detox Cleansing', 'audio_folder' => 'Detox Cleansing', 'image' => 'Detox Cleansing.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Detoxification', 'filename' => 'Detoxification.mp3'],
            ['name' => 'Heavy Metals Detox', 'filename' => 'Heavy Metals Detox.mp3'],
            ['name' => 'Radiation Detox', 'filename' => 'Radiation Detox.mp3'],
            ['name' => 'Toxin Elimination', 'filename' => 'Toxin Elimination.mp3'],
        ]);

        // $album = Album::create(['order' => 620, 'category_id' => 11,
        //     'name' => 'Rife Frequencies for Cold, Flu & Viruses', 'audio_folder' => 'Rife Frequencies for Cold, Flu & Viruses', 'image' => 'Rife-Frequencies-for-Cold,-Flu-&-Viruses.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Chicken Pox', 'filename' => 'Chicken Pox.mp3'],
        //     ['name' => 'Epstein-Barr', 'filename' => 'Epstein-Barr.mp3'],
        //     ['name' => 'Flu - Swine Flu', 'filename' => 'Flu - Swine Flu.mp3'],
        //     ['name' => 'Flu, Another List', 'filename' => 'Flu, Another List.mp3'],
        //     ['name' => 'Flu, Model D_E list', 'filename' => 'Flu, Model D_E list.mp3'],
        //     ['name' => 'Flu', 'filename' => 'Flu.mp3'],
        //     ['name' => 'German Measles', 'filename' => 'German Measles.mp3'],
        //     ['name' => 'Grippe', 'filename' => 'Grippe.mp3'],
        //     ['name' => 'Influenza', 'filename' => 'Influenza.mp3'],
        //     ['name' => 'Mumps', 'filename' => 'Mumps.mp3'],
        //     ['name' => 'Poliomyelitis', 'filename' => 'Poliomyelitis.mp3'],
        //     ['name' => 'Rabies', 'filename' => 'Rabies.mp3'],
        //     ['name' => 'Shingles', 'filename' => 'Shingles.mp3'],
        //     ['name' => 'Smallpox', 'filename' => 'Smallpox.mp3'],
        //     ['name' => 'West Nile Virus', 'filename' => 'West Nile Virus.mp3'],
        //     ['name' => 'Yellow Fever', 'filename' => 'Yellow Fever.mp3'],
        // ]);

        // $album = Album::create(['order' => 630, 'category_id' => 11,
        //     'name' => 'Rife Frequencies for Lyme Disease & Parasites', 'audio_folder' => 'Rife Frequencies for Lyme Disease & Parasites', 'image' => 'Rife-Frequencies-for-Lyme-Disease-&-Parasites.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Bladder Worms', 'filename' => 'Bladder Worms.mp3'],
        //     ['name' => 'Flukes, General', 'filename' => 'Flukes, General.mp3'],
        //     ['name' => 'Flukes, Human Intestinal', 'filename' => 'Flukes, Human Intestinal.mp3'],
        //     ['name' => 'Giardia', 'filename' => 'Giardia.mp3'],
        //     ['name' => 'Malaria', 'filename' => 'Malaria.mp3'],
        //     ['name' => 'Parasite 1', 'filename' => 'Parasite 1.mp3'],
        //     ['name' => 'Parasite 2', 'filename' => 'Parasite 2.mp3'],
        //     ['name' => 'Parasite 3', 'filename' => 'Parasite 3.mp3'],
        //     ['name' => 'Parasites, General', 'filename' => 'Parasites, General.mp3'],
        //     ['name' => 'Worms, Round', 'filename' => 'Worms, Round.mp3'],
        // ]);

        // $album = Album::create(['order' => 640, 'category_id' => 11,
        //     'name' => 'Rife Frequencies for Bacteria & Infections', 'audio_folder' => 'Rife Frequencies for Bacteria & Infections', 'image' => 'Rife-Frequencies-for-Bacteria-&-Infections.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Actinomycosis', 'filename' => 'Actinomycosis.mp3'],
        //     ['name' => 'Anthrax', 'filename' => 'Anthrax.mp3'],
        //     ['name' => 'Bacillus Coli', 'filename' => 'Bacillus Coli.mp3'],
        //     ['name' => 'Bacterial Infection', 'filename' => 'Bacterial Infection.mp3'],
        //     ['name' => 'Brucella', 'filename' => 'Brucella.mp3'],
        //     ['name' => 'Bubonic Plague', 'filename' => 'Bubonic Plague.mp3'],
        //     ['name' => 'Chlamydia Pneumonia', 'filename' => 'Chlamydia Pneumonia.mp3'],
        //     ['name' => 'Cholera', 'filename' => 'Cholera.mp3'],
        //     ['name' => 'Coli Bacteria', 'filename' => 'Coli Bacteria.mp3'],
        //     ['name' => 'Glanders', 'filename' => 'Glanders.mp3'],
        //     ['name' => 'Infection', 'filename' => 'Infection.mp3'],
        //     ['name' => 'Leprosy', 'filename' => 'Leprosy.mp3'],
        //     ['name' => 'Lyme - Other Frequencies', 'filename' => 'Lyme - Other Frequencies.mp3'],
        //     ['name' => 'Measles', 'filename' => 'Measles.mp3'],
        //     ['name' => 'Meningitis', 'filename' => 'Meningitis.mp3'],
        //     ['name' => 'Mononucleosis', 'filename' => 'Mononucleosis.mp3'],
        //     ['name' => 'Mycoplasma General', 'filename' => 'Mycoplasma General.mp3'],
        //     ['name' => 'Mycoplasma Pneumonia', 'filename' => 'Mycoplasma Pneumonia.mp3'],
        //     ['name' => 'Mycoplasma Pulmonis', 'filename' => 'Mycoplasma Pulmonis.mp3'],
        //     ['name' => 'Nanobacteria(Nanobacteriumsanguineum)', 'filename' => 'Nanobacteria(Nanobacteriumsanguineum).mp3'],
        //     ['name' => 'Nocardia Asteroides', 'filename' => 'Nocardia Asteroides.mp3'],
        //     ['name' => 'Peritonitis (Inflammation - Peritoneum)', 'filename' => 'Peritonitis (Inflammation - Peritoneum).mp3'],
        //     ['name' => 'Rubella', 'filename' => 'Rubella.mp3'],
        //     ['name' => 'Rubiola', 'filename' => 'Rubiola.mp3'],
        //     ['name' => 'Scarlet Fever', 'filename' => 'Scarlet Fever.mp3'],
        //     ['name' => 'Shigella', 'filename' => 'Shigella.mp3'],
        //     ['name' => 'Sore throat', 'filename' => 'Sore throat.mp3'],
        //     ['name' => 'Staph infections', 'filename' => 'Staph infections.mp3'],
        //     ['name' => 'Streptococcus infections', 'filename' => 'Streptococcus infections.mp3'],
        // ]);

        // $album = Album::create(['order' => 650, 'category_id' => 11,
        //     'name' => 'Rife Frequencies for Fungus', 'audio_folder' => 'Rife Frequencies for Fungus', 'image' => 'Rife-Frequencies-for-Fungus.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Aspergillus Flavus', 'filename' => 'Aspergillus Flavus.mp3'],
        //     ['name' => 'Aspergillus, all types', 'filename' => 'Aspergillus, all types.mp3'],
        //     ['name' => 'Aspergillus, Glaucus', 'filename' => 'Aspergillus, Glaucus.mp3'],
        //     ['name' => 'Aspergillus, Niger', 'filename' => 'Aspergillus, Niger.mp3'],
        //     ['name' => 'Cladosporium Fulvum', 'filename' => 'Cladosporium Fulvum.mp3'],
        //     ['name' => 'Fungus, Foot', 'filename' => 'Fungus, Foot.mp3'],
        //     ['name' => 'Fungus', 'filename' => 'Fungus.mp3'],
        //     ['name' => 'Fusarium Oxysporum', 'filename' => 'Fusarium Oxysporum.mp3'],
        //     ['name' => 'Fusarium', 'filename' => 'Fusarium.mp3'],
        //     ['name' => 'Mold', 'filename' => 'Mold.mp3'],
        //     ['name' => 'Penicillium Chyrosogenium 1', 'filename' => 'Penicillium Chyrosogenium 1.mp3'],
        //     ['name' => 'Penicillium Notatum 1', 'filename' => 'Penicillium Notatum 1.mp3'],
        //     ['name' => 'Penicillium Rubrum', 'filename' => 'Penicillium Rubrum.mp3'],
        //     ['name' => 'Thrush', 'filename' => 'Thrush.mp3'],
        // ]);

        // $album = Album::create(['order' => 680, 'category_id' => 12,
        //     'name' => 'Rife Frequencies for STD\'s', 'audio_folder' => 'Rife Frequencies for STD\'s', 'image' => 'Rife-Frequencies-for-STD\'s.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'AIDS', 'filename' => 'AIDS.mp3'],
        //     ['name' => 'Chlamydia', 'filename' => 'Chlamydia.mp3'],
        //     ['name' => 'Gonorrhea', 'filename' => 'Gonorrhea.mp3'],
        //     ['name' => 'Herpes Simplex I - Cold Sores', 'filename' => 'Herpes Simplex I - Cold Sores.mp3'],
        //     ['name' => 'Herpes Zoster (Chicken Pox, Shingles)', 'filename' => 'Herpes Zoster (Chicken Pox, Shingles).mp3'],
        //     ['name' => 'Herpes, General Frequencies', 'filename' => 'Herpes, General Frequencies.mp3'],
        //     ['name' => 'Herpes, Genital', 'filename' => 'Herpes, Genital.mp3'],
        //     ['name' => 'Mycoplasma Fermentans Long list', 'filename' => 'Mycoplasma Fermentans Long list.mp3'],
        //     ['name' => 'Mycoplasma Fermentans, Short list', 'filename' => 'Mycoplasma Fermentans, Short list.mp3'],
        //     ['name' => 'Syphilis', 'filename' => 'Syphilis.mp3'],
        //     ['name' => 'Treponema', 'filename' => 'Treponema.mp3'],
        //     ['name' => 'Urethritis urethra inflammation', 'filename' => 'Urethritis urethra inflammation.mp3'],
        // ]);

        // Glands

        $album = Album::create(['order' => 480, 'category_id' => 9,
            'name' => 'Pineal & Pituitary Gland', 'audio_folder' => 'Pineal & Pituitary Gland', 'image' => 'Pineal Pituitary Gland.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => '3rd Eye (Pineal)', 'filename' => '3rd Eye (Pineal).mp3'],
            ['name' => 'Acromegaly', 'filename' => 'Acromegaly.mp3'],
            ['name' => 'Hypopituitarism', 'filename' => 'Hypopituitarism.mp3'],
            ['name' => 'Tumors (Pituitary)', 'filename' => 'Tumors (Pituitary).mp3'],
        ]);

        $album = Album::create(['order' => 485, 'category_id' => 9,
            'name' => 'Thymus & Thyroid Glands', 'audio_folder' => 'Thymus & Thyroid Glands', 'image' => 'Thymus & Thyroid Glands.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Goiter', 'filename' => 'Goiter.mp3'],
            ['name' => 'Larynx', 'filename' => 'Larynx.mp3'],
            ['name' => 'Neck, Stiff, Painful', 'filename' => 'Neck, Stiff, Painful.mp3'],
            ['name' => 'Stiff Neck', 'filename' => 'Stiff Neck.mp3'],
            ['name' => 'Throat Inflammation', 'filename' => 'Throat Inflammation.mp3'],
            ['name' => 'Thymus', 'filename' => 'Thymus.mp3'],
            ['name' => 'Tonsillitis, tonsil inflammation', 'filename' => 'Tonsillitis, tonsil inflammation.mp3'],
            ['name' => 'Tonsils', 'filename' => 'Tonsils.mp3'],
        ]);

        $album = Album::create(['order' => 490, 'category_id' => 9,
            'name' => 'Adrenal Gland', 'audio_folder' => 'Adrenal Gland', 'image' => 'Adrenal.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Adrenal Fatigue', 'filename' => 'Adrenal Fatigue.mp3'],
            ['name' => 'Suprarenal', 'filename' => 'Suprarenal.mp3'],
        ]);

        $album = Album::create(['order' => 500, 'category_id' => 9,
            'name' => 'Hypothalamus', 'audio_folder' => 'Hypothalamus', 'image' => 'Hypothalamus.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Hypothalamus Balance', 'filename' => 'Hypothalamus Balance.mp3'],
            ['name' => 'Thalamic Diseases', 'filename' => 'Thalamic Diseases.mp3'],
            ['name' => 'Thalamus', 'filename' => 'Thalamus.mp3'],
        ]);

        // Physio

        $album = Album::create(['order' => 510, 'category_id' => 10,
            'name' => 'Recovery & Regeneration', 'audio_folder' => 'Recovery & Regeneration', 'image' => 'Recovery Regeneration.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Bone Healing', 'filename' => 'Bone Healing.mp3'],
            ['name' => 'Costalgia (Rib Pain)', 'filename' => 'Costalgia (Rib Pain).mp3'],
            ['name' => 'Cramps', 'filename' => 'Cramps.mp3'],
            ['name' => 'Disk, slipped', 'filename' => 'Disk, slipped.mp3'],
            ['name' => 'Hip Pain', 'filename' => 'Hip Pain.mp3'],
            ['name' => 'Injuries', 'filename' => 'Injuries.mp3'],
            ['name' => 'Intercostal Neuralgia', 'filename' => 'Intercostal Neuralgia.mp3'],
            ['name' => 'Pain', 'filename' => 'Pain.mp3'],
            ['name' => 'Trauma, Injury, Shock', 'filename' => 'Trauma, Injury, Shock.mp3'],
            ['name' => 'Whiplash', 'filename' => 'Whiplash.mp3'],
        ]);

        $album = Album::create(['order' => 520, 'category_id' => 10,
            'name' => 'Joints', 'audio_folder' => 'Joints', 'image' => 'Joints.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Arthritis - General', 'filename' => 'Arthritis - General.mp3'],
            ['name' => 'Arthritis. Rheumatoid', 'filename' => 'Arthritis. Rheumatoid.mp3'],
            ['name' => 'Bunion Pain', 'filename' => 'Bunion Pain.mp3'],
            ['name' => 'Bursitis.mp3', 'filename' => 'Bursitis.mp3'],
            ['name' => 'Carpal Tunnel', 'filename' => 'Carpal Tunnel.mp3'],
            ['name' => 'Gout', 'filename' => 'Gout.mp3'],
            ['name' => 'Joints (Inflamed)', 'filename' => 'Joints (Inflamed).mp3'],
            ['name' => 'Osteoarthritis', 'filename' => 'Osteoarthritis.mp3'],
            ['name' => 'Rheumatism', 'filename' => 'Rheumatism.mp3'],
        ]);

        $album = Album::create(['order' => 530, 'category_id' => 10,
            'name' => 'Bones & Spine', 'audio_folder' => 'Bones & Spine', 'image' => 'Bones Spine.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Ankylosing Spondylitis', 'filename' => 'Ankylosing Spondylitis.mp3'],
            ['name' => 'Backache', 'filename' => 'Backache.mp3'],
            ['name' => 'Hernia of Disc', 'filename' => 'Hernia of Disc.mp3'],
            ['name' => 'Lumbago (Back Pain)', 'filename' => 'Lumbago (Back Pain).mp3'],
            ['name' => 'Lumbar Vertebrae', 'filename' => 'Lumbar Vertebrae.mp3'],
            ['name' => 'Osteomyelitis', 'filename' => 'Osteomyelitis.mp3'],
            ['name' => 'Rickets, Vitamin D and Sunlight', 'filename' => 'Rickets, Vitamin D and Sunlight.mp3'],
            ['name' => 'Sciatica', 'filename' => 'Sciatica.mp3'],
            ['name' => 'Spondylitis', 'filename' => 'Spondylitis.mp3'],
        ]);

        $album = Album::create(['order' => 540, 'category_id' => 10,
            'name' => 'Muscles & Tissues', 'audio_folder' => 'Muscles & Tissues', 'image' => 'muscles-and-tissues.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Ataxia of Muscles', 'filename' => 'Ataxia of Muscles.mp3'],
            ['name' => 'Cancer, Sarcoma', 'filename' => 'Cancer, Sarcoma.mp3'],
            ['name' => 'Contractions', 'filename' => 'Contractions.mp3'],
            ['name' => 'Convulsions', 'filename' => 'Convulsions.mp3'],
            ['name' => 'Fibroma', 'filename' => 'Fibroma.mp3'],
            ['name' => 'Fissures', 'filename' => 'Fissures.mp3'],
            ['name' => 'Fistula Ulcer', 'filename' => 'Fistula Ulcer.mp3'],
            ['name' => 'Hernia', 'filename' => 'Hernia.mp3'],
            ['name' => 'Hiccoughs', 'filename' => 'Hiccoughs.mp3'],
            ['name' => 'Inflammation', 'filename' => 'Inflammation.mp3'],
            ['name' => 'Locomotor Ataxia, Muscle Failure', 'filename' => 'Locomotor Ataxia, Muscle Failure.mp3'],
            ['name' => 'Muscle Repair', 'filename' => 'Muscle Repair.mp3'],
            ['name' => 'Muscle Spasm, Tightness', 'filename' => 'Muscle Spasm, Tightness.mp3'],
            ['name' => 'Muscle Stiffness', 'filename' => 'Muscle Stiffness.mp3'],
            ['name' => 'Paralysis', 'filename' => 'Paralysis.mp3'],
            ['name' => 'Pelvic Disorders (Male & Female)', 'filename' => 'Pelvic Disorders (Male & Female).mp3'],
            ['name' => 'Polyps, growths', 'filename' => 'Polyps, growths.mp3'],
            ['name' => 'Seizures', 'filename' => 'Seizures.mp3'],
            ['name' => 'Spasm, Muscle', 'filename' => 'Spasm, Muscle.mp3'],
            ['name' => 'Tremors', 'filename' => 'Tremors.mp3'],
        ]);

        $album = Album::create(['order' => 550, 'category_id' => 10,
            'name' => 'Legs & Arms', 'audio_folder' => 'Legs & Arms', 'image' => 'LEGS & ARMS.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Corns on Feet', 'filename' => 'Corns on Feet.mp3'],
            ['name' => 'Diabetic Foot Infection', 'filename' => 'Diabetic Foot Infection.mp3'],
            ['name' => 'Elbow pain', 'filename' => 'Elbow pain.mp3'],
            ['name' => 'Gangrene', 'filename' => 'Gangrene.mp3'],
            ['name' => 'Numbness, Arms, Fingers', 'filename' => 'Numbness, Arms, Fingers.mp3'],
            ['name' => 'Tennis Elbow', 'filename' => 'Tennis Elbow.mp3'],
        ]);

        // Senses

        $album = Album::create(['order' => 560, 'category_id' => 11,
            'name' => 'Brain & Nerves', 'audio_folder' => 'Brain & Nerves', 'image' => 'brain-and-nerves.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Brain Waves (Alpha State)', 'filename' => 'Brain Waves (Alpha State).mp3'],
            ['name' => 'Brain Waves (Beta State)', 'filename' => 'Brain Waves (Beta State).mp3'],
            ['name' => 'Brain Waves (Theta)', 'filename' => 'Brain Waves (Theta).mp3'],
            ['name' => 'Brain', 'filename' => 'Brain.mp3'],
            ['name' => 'Cancer, Glioblastoma', 'filename' => 'Cancer, Glioblastoma.mp3'],
            ['name' => 'Cerebral Palsy', 'filename' => 'Cerebral Palsy.mp3'],
            ['name' => 'Cerebro-Spinal Trouble', 'filename' => 'Cerebro-Spinal Trouble.mp3'],
            ['name' => 'Epilepsy (Fits)', 'filename' => 'Epilepsy (Fits).mp3'],
            ['name' => 'Nerves, Inflammation', 'filename' => 'Nerves, Inflammation.mp3'],
            ['name' => 'Nervous System Tonic', 'filename' => 'Nervous System Tonic.mp3'],
            ['name' => 'Neuritis, Nerve Inflammation', 'filename' => 'Neuritis, Nerve Inflammation.mp3'],
            ['name' => 'Neurosis', 'filename' => 'Neurosis.mp3'],
            ['name' => 'Pineal', 'filename' => 'Pineal.mp3'],
            ['name' => 'Sciatica, nerve inflammation', 'filename' => 'Sciatica, nerve inflammation.mp3'],
            ['name' => 'Spinal Meningitis', 'filename' => 'Spinal Meningitis.mp3'],
            ['name' => 'Stroke', 'filename' => 'Stroke.mp3'],
            ['name' => 'Thalamus, Sensor Relay Center', 'filename' => 'Thalamus, Sensor Relay Center.mp3'],
        ]);

        $album = Album::create(['order' => 570, 'category_id' => 11,
            'name' => 'Eyes', 'audio_folder' => 'Eyes', 'image' => 'Eyes.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Cataracts', 'filename' => 'Cataracts.mp3'],
            ['name' => 'Conjunctivitis (Contagious)', 'filename' => 'Conjunctivitis (Contagious).mp3'],
            ['name' => 'Eye, Arteriosclerosis', 'filename' => 'Eye, Arteriosclerosis.mp3'],
            ['name' => 'Eye, Bifocal', 'filename' => 'Eye, Bifocal.mp3'],
            ['name' => 'Eye, Blurred', 'filename' => 'Eye, Blurred.mp3'],
            ['name' => 'Eye, Cataract', 'filename' => 'Eye, Cataract.mp3'],
            ['name' => 'Eye, Color Blind', 'filename' => 'Eye, Color Blind.mp3'],
            ['name' => 'Eye, Conjunctivitis', 'filename' => 'Eye, Conjunctivitis.mp3'],
            ['name' => 'Eye, Crossed', 'filename' => 'Eye, Crossed.mp3'],
            ['name' => 'Eye, Degeneration', 'filename' => 'Eye, Degeneration.mp3'],
            ['name' => 'Eye, Diplopia', 'filename' => 'Eye, Diplopia.mp3'],
            ['name' => 'Eye, Droop of Lid', 'filename' => 'Eye, Droop of Lid.mp3'],
            ['name' => 'Eye, Far Sighted', 'filename' => 'Eye, Far Sighted.mp3'],
            ['name' => 'Eye, Glaucoma', 'filename' => 'Eye, Glaucoma.mp3'],
            ['name' => 'Eye, Improve Vision', 'filename' => 'Eye, Improve Vision.mp3'],
            ['name' => 'Eye, Infected', 'filename' => 'Eye, Infected.mp3'],
            ['name' => 'Eye, Lacrimal', 'filename' => 'Eye, Lacrimal.mp3'],
            ['name' => 'Eye, Near & farsighted', 'filename' => 'Eye, Near & farsighted.mp3'],
            ['name' => 'Eye, Nerve pain', 'filename' => 'Eye, Nerve pain.mp3'],
            ['name' => 'Eye, Strained', 'filename' => 'Eye, Strained.mp3'],
            ['name' => 'Eyelid Swelling', 'filename' => 'Eyelid Swelling.mp3'],
            ['name' => 'Eyes', 'filename' => 'Eyes.mp3'],
            ['name' => 'Trachoma, Eye Inflammation', 'filename' => 'Trachoma, Eye Inflammation.mp3'],
        ]);

        $album = Album::create(['order' => 580, 'category_id' => 11,
            'name' => 'Ears', 'audio_folder' => 'Ears', 'image' => 'Ears.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Deafness', 'filename' => 'Deafness.mp3'],
            ['name' => 'Ear Discharges', 'filename' => 'Ear Discharges.mp3'],
            ['name' => 'Earaches', 'filename' => 'Earaches.mp3'],
            ['name' => 'Ears, Balance', 'filename' => 'Ears, Balance.mp3'],
            ['name' => 'Ears, Dizziness', 'filename' => 'Ears, Dizziness.mp3'],
            ['name' => 'Ears, Ringing', 'filename' => 'Ears, Ringing.mp3'],
            ['name' => 'Eustachian', 'filename' => 'Eustachian.mp3'],
            ['name' => 'Giddiness', 'filename' => 'Giddiness.mp3'],
            ['name' => 'Hearing, to improve', 'filename' => 'Hearing, to improve.mp3'],
            ['name' => 'Motion Sickness', 'filename' => 'Motion Sickness.mp3'],
            ['name' => 'Tinnitus', 'filename' => 'Tinnitus.mp3'],
        ]);

        $album = Album::create(['order' => 590, 'category_id' => 11,
            'name' => 'Nose', 'audio_folder' => 'Nose', 'image' => 'Nose.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Coryza (Nose Disorder)', 'filename' => 'Coryza (Nose Disorder).mp3'],
            ['name' => 'Hay Fever', 'filename' => 'Hay Fever.mp3'],
            ['name' => 'Nose, Disorders', 'filename' => 'Nose, Disorders.mp3'],
            ['name' => 'Rhinitis', 'filename' => 'Rhinitis.mp3'],
            ['name' => 'Sinusitis, Sinus Headaches', 'filename' => 'Sinusitis, Sinus Headaches.mp3'],
            ['name' => 'Smell, None, Anosmia', 'filename' => 'Smell, None, Anosmia.mp3'],
            ['name' => 'Sneezing', 'filename' => 'Sneezing.mp3'],
        ]);

        // Organs

        $album = Album::create(['order' => 600, 'category_id' => 12,
            'name' => 'Kidneys', 'audio_folder' => 'Kidneys', 'image' => 'Kidneys.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Bright\'s Disease', 'filename' => 'Bright\'s Disease.mp3'],
            ['name' => 'Edema', 'filename' => 'Edema.mp3'],
            ['name' => 'Fluid Retention', 'filename' => 'Fluid Retention.mp3'],
            ['name' => 'Kidney Stones', 'filename' => 'Kidney Stones.mp3'],
            ['name' => 'Kidney Tonic', 'filename' => 'Kidney Tonic.mp3'],
            ['name' => 'Kidneys', 'filename' => 'Kidneys.mp3'],
            ['name' => 'Nephritis, Kidney Inflammation', 'filename' => 'Nephritis, Kidney Inflammation.mp3'],
        ]);

        $album = Album::create(['order' => 610, 'category_id' => 12,
            'name' => 'Lungs', 'audio_folder' => 'Lungs', 'image' => 'Lungs.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Asthma', 'filename' => 'Asthma.mp3'],
            ['name' => 'Breathing Problems', 'filename' => 'Breathing Problems.mp3'],
            ['name' => 'Bronchial Pneumonia', 'filename' => 'Bronchial Pneumonia.mp3'],
            ['name' => 'Bronchial Tubes, To Open', 'filename' => 'Bronchial Tubes, To Open.mp3'],
            ['name' => 'Bronchitis', 'filename' => 'Bronchitis.mp3'],
            ['name' => 'Catarrh (Mucous) Inflammation', 'filename' => 'Catarrh (Mucous) Inflammation.mp3'],
            ['name' => 'Hoarseness', 'filename' => 'Hoarseness.mp3'],
            ['name' => 'Lungs', 'filename' => 'Lungs.mp3'],
            ['name' => 'Mucus', 'filename' => 'Mucus.mp3'],
            ['name' => 'Pharyngitis', 'filename' => 'Pharyngitis.mp3'],
            ['name' => 'Pleural Effusion', 'filename' => 'Pleural Effusion.mp3'],
            ['name' => 'Pleurisy', 'filename' => 'Pleurisy.mp3'],
            ['name' => 'Pneumonia', 'filename' => 'Pneumonia.mp3'],
        ]);

        $album = Album::create(['order' => 620, 'category_id' => 12,
            'name' => 'Stomach, Intestines, Digestion', 'audio_folder' => 'Stomach, Intestines, Digestion', 'image' => 'Stomach Intestines Digestion.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Abdominal Cramps', 'filename' => 'Abdominal Cramps.mp3'],
            ['name' => 'Abdominal Pain', 'filename' => 'Abdominal Pain.mp3'],
            ['name' => 'Appendicitis', 'filename' => 'Appendicitis.mp3'],
            ['name' => 'Appetite (Low)', 'filename' => 'Appetite (Low).mp3'],
            ['name' => 'Biliousness', 'filename' => 'Biliousness.mp3'],
            ['name' => 'Colic (Stomach & Colon Pain)', 'filename' => 'Colic (Stomach & Colon Pain).mp3'],
            ['name' => 'Colitis (Mucous Catarrh of Colon)', 'filename' => 'Colitis (Mucous Catarrh of Colon).mp3'],
            ['name' => 'Constipation', 'filename' => 'Constipation.mp3'],
            ['name' => 'Cramps, Abdominal', 'filename' => 'Cramps, Abdominal.mp3'],
            ['name' => 'Diarrhea', 'filename' => 'Diarrhea.mp3'],
            ['name' => 'Digestion', 'filename' => 'Digestion.mp3'],
            ['name' => 'Distended Stomach', 'filename' => 'Distended Stomach.mp3'],
            ['name' => 'Dysentery', 'filename' => 'Dysentery.mp3'],
            ['name' => 'Dyspepsia (Indigestion)', 'filename' => 'Dyspepsia (Indigestion).mp3'],
            ['name' => 'Esophagus', 'filename' => 'Esophagus.mp3'],
            ['name' => 'Food Poisoning', 'filename' => 'Food Poisoning.mp3'],
            ['name' => 'Gas pains in stomach', 'filename' => 'Gas pains in stomach.mp3'],
            ['name' => 'Intestines, Spasms', 'filename' => 'Intestines, Spasms.mp3'],
            ['name' => 'Intoxication', 'filename' => 'Intoxication.mp3'],
            ['name' => 'Laxative, Mild', 'filename' => 'Laxative, Mild.mp3'],
            ['name' => 'Small Intestine', 'filename' => 'Small Intestine.mp3'],
            ['name' => 'Solar plexus (Abdominal Pain)', 'filename' => 'Solar plexus (Abdominal Pain).mp3'],
            ['name' => 'Stomach Flu', 'filename' => 'Stomach Flu.mp3'],
            ['name' => 'Stomach, Cramps', 'filename' => 'Stomach, Cramps.mp3'],
            ['name' => 'Taste, Morbid', 'filename' => 'Taste, Morbid.mp3'],
            ['name' => 'Taste, None', 'filename' => 'Taste, None.mp3'],
        ]);

        $album = Album::create(['order' => 630, 'category_id' => 12,
            'name' => 'Heart', 'audio_folder' => 'Heart', 'image' => 'Heart.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Angina', 'filename' => 'Angina.mp3'],
            ['name' => 'Blood (Over Heart Area)', 'filename' => 'Blood (Over Heart Area).mp3'],
            ['name' => 'Heart Muscle', 'filename' => 'Heart Muscle.mp3'],
            ['name' => 'Heart, Angina Pectoris', 'filename' => 'Heart, Angina Pectoris.mp3'],
            ['name' => 'Heart, Bradycardia', 'filename' => 'Heart, Bradycardia.mp3'],
            ['name' => 'Heart, Cardiac Hypertrophy', 'filename' => 'Heart, Cardiac Hypertrophy.mp3'],
            ['name' => 'Heart, Endocarditis', 'filename' => 'Heart, Endocarditis.mp3'],
            ['name' => 'Heart, Myocarditis', 'filename' => 'Heart, Myocarditis.mp3'],
            ['name' => 'Heart, Palpitations, to Reduce', 'filename' => 'Heart, Palpitations, to Reduce .mp3'],
            ['name' => 'Heart, Pericarditis', 'filename' => 'Heart, Pericarditis.mp3'],
            ['name' => 'Heart, Stenosis', 'filename' => 'Heart, Stenosis.mp3'],
            ['name' => 'Heart, Tachycardia', 'filename' => 'Heart, Tachycardia.mp3'],
            ['name' => 'Heart', 'filename' => 'Heart.mp3'],
            ['name' => 'Pericarditis (Inflamed Heart Covering)', 'filename' => 'Pericarditis (Inflamed Heart Covering).mp3'],
        ]);

        // $album = Album::create(['order' => 640, 'category_id' => 12,
        //     'name' => 'Blood', 'audio_folder' => 'Blood', 'image' => 'blood.png',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Anemia', 'filename' => 'Anemia.mp3'],
        //     ['name' => 'Aneurysm', 'filename' => 'Aneurysm.mp3'],
        //     ['name' => 'Apoplexy', 'filename' => 'Apoplexy.mp3'],
        //     ['name' => 'Arteriosclerosis', 'filename' => 'Arteriosclerosis.mp3'],
        //     ['name' => 'Cancer, Leukemia', 'filename' => 'Cancer, Leukemia.mp3'],
        //     ['name' => 'Cancer, Lymphoma, non-Hodgkin\'s', 'filename' => 'Cancer, Lymphoma, non-Hodgkin\'s.mp3'],
        //     ['name' => 'Circulation, Poor', 'filename' => 'Circulation, Poor.mp3'],
        //     ['name' => 'Diabetes', 'filename' => 'Diabetes.mp3'],
        //     ['name' => 'Hemorrhage', 'filename' => 'Hemorrhage.mp3'],
        //     ['name' => 'High Blood Pressure', 'filename' => 'High Blood Pressure.mp3'],
        //     ['name' => 'Hypertension', 'filename' => 'Hypertension.mp3'],
        //     ['name' => 'Hypotension', 'filename' => 'Hypotension.mp3'],
        //     ['name' => 'Hypoxia (Low oxygen)', 'filename' => 'Hypoxia (Low oxygen).mp3'],
        //     ['name' => 'Leucocyte Builder', 'filename' => 'Leucocyte Builder.mp3'],
        //     ['name' => 'Leukemia', 'filename' => 'Leukemia.mp3'],
        //     ['name' => 'Low Blood Pressure', 'filename' => 'Low Blood Pressure.mp3'],
        //     ['name' => 'Multiple Myeloma', 'filename' => 'Multiple Myeloma.mp3'],
        //     ['name' => 'Thrombosis, Blood Clot', 'filename' => 'Thrombosis, Blood Clot.mp3'],
        //     ['name' => 'White Blood Cell Stimulation', 'filename' => 'White Blood Cell Stimulation.mp3'],
        // ]);

        $album = Album::create(['order' => 650, 'category_id' => 12,
            'name' => 'Liver & Pancreas', 'audio_folder' => 'Liver & Pancreas', 'image' => 'Liver Pancreas.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Fatty Liver', 'filename' => 'Fatty Liver.mp3'],
            ['name' => 'Flukes', 'filename' => 'Flukes.mp3'],
            ['name' => 'Liver Cirrhosis', 'filename' => 'Liver Cirrhosis.mp3'],
            ['name' => 'Liver Diseases', 'filename' => 'Liver Diseases.mp3'],
            ['name' => 'Liver', 'filename' => 'Liver.mp3'],
            ['name' => 'Pancreas', 'filename' => 'Pancreas.mp3'],
            ['name' => 'Pancreatic Diseases', 'filename' => 'Pancreatic Diseases.mp3'],
        ]);

        // Family

        $album = Album::create(['order' => 670, 'category_id' => 13,
            'name' => 'Men\'s Wellness', 'audio_folder' => 'Men\'s Wellness', 'image' => 'Mens.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Epididymitis (Inflammation of Testicle)', 'filename' => 'Epididymitis (Inflammation of Testicle).mp3'],
            ['name' => 'Gonad (Sex Gland Inflammation)', 'filename' => 'Gonad (Sex Gland Inflammation).mp3'],
            ['name' => 'Hydrocele (Fluid in Testicle)', 'filename' => 'Hydrocele (Fluid in Testicle).mp3'],
            ['name' => 'Impotence', 'filename' => 'Impotence.mp3'],
            ['name' => 'Orchitis, testes inflamed', 'filename' => 'Orchitis, testes inflamed.mp3'],
            ['name' => 'Prostate Gland', 'filename' => 'Prostate Gland.mp3'],
            ['name' => 'Pulse, Men', 'filename' => 'Pulse, Men.mp3'],
            ['name' => 'Spermatorrhea', 'filename' => 'Spermatorrhea.mp3'],
            ['name' => 'Sterility', 'filename' => 'Sterility.mp3'],
            ['name' => 'Testes', 'filename' => 'Testes.mp3'],
        ]);

        $album = Album::create(['order' => 680, 'category_id' => 13,
            'name' => 'Women\'s Wellness', 'audio_folder' => 'Women\'s Wellness', 'image' => 'Womens.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Amenorrhea (No Menstruation)', 'filename' => 'Amenorrhea (No Menstruation).mp3'],
            ['name' => 'Breast Problems', 'filename' => 'Breast Problems.mp3'],
            ['name' => 'Cancer, Breast', 'filename' => 'Cancer, Breast.mp3'],
            ['name' => 'Cancer, Cervical', 'filename' => 'Cancer, Cervical.mp3'],
            ['name' => 'Cervicitis, Uterus', 'filename' => 'Cervicitis, Uterus.mp3'],
            ['name' => 'Endometriosis', 'filename' => 'Endometriosis.mp3'],
            ['name' => 'Hot Flashes', 'filename' => 'Hot Flashes.mp3'],
            ['name' => 'Lactation', 'filename' => 'Lactation.mp3'],
            ['name' => 'Leukorrhea, White Vaginal Discharge', 'filename' => 'Leukorrhea, White Vaginal Discharge.mp3'],
            ['name' => 'Ovaries', 'filename' => 'Ovaries.mp3'],
            ['name' => 'Pulse, Women', 'filename' => 'Pulse, Women.mp3'],
            ['name' => 'Sexual Weakness, Male & Female', 'filename' => 'Sexual Weakness, Male & Female.mp3'],
        ]);

        $album = Album::create(['order' => 690, 'category_id' => 13,
            'name' => 'Children\'s Wellness', 'audio_folder' => 'Children\'s Wellness', 'image' => 'Childrens.png',
            'benefits' => '[]'
        ]);
        // $album->tags()->attach([]);
        $album->tracks()->createMany([
            ['name' => 'Childhood Disorders', 'filename' => 'Childhood Disorders.mp3'],
            ['name' => 'Coughing Colds', 'filename' => 'Coughing Colds.mp3'],
            ['name' => 'Coxsackie', 'filename' => 'Coxsackie.mp3'],
            ['name' => 'Diphteria', 'filename' => 'Diphteria.mp3'],
            ['name' => 'Fever (all Kinds)', 'filename' => 'Fever (all Kinds).mp3'],
            ['name' => 'Hepatitis, General', 'filename' => 'Hepatitis, General.mp3'],
            ['name' => 'Worms', 'filename' => 'Worms.mp3'],
        ]);

        // Wellness I

        $album = Album::create(['order' => 700, 'category_id' => 14,
            'name' => 'All Purpose Healing', 'audio_folder' => 'Wellness 1', 'image' => 'All Purpose Healing-v2.png',
            'benefits' => '["Improves mood", "Helps you sleep better", "Feel a general improvement in your over-all well being", "May relieve muscle and body discomfort"]'
        ]);
        $album->tags()->attach([4, 6]);
        $album->tracks()->createMany([
            ['name' => 'All Purpose Healing', 'filename' => 'All Purpose Healing.mp3'],
        ]);

        $album = Album::create(['order' => 710, 'category_id' => 14,
            'name' => 'All-Purpose Regeneration', 'audio_folder' => 'Wellness 1', 'image' => 'All-Purpose Regeneration.png',
            'benefits' => '["Supports faster body recovery", "Supports rehabilitation", "Kick-start regeneration in the body", "Supports repair of injury"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'All-Purpose Regeneration', 'filename' => 'All-Purpose Regeneration.mp3'],
        ]);

        $album = Album::create(['order' => 720, 'category_id' => 14,
            'name' => 'Get Well Soon & Feel Better', 'audio_folder' => 'Wellness 1', 'image' => 'Get Well Soon & Feel Better.png',
            'benefits' => '["Accelerate recuperation", "Supports your own body\'s healing process", "Avoid depression caused by injury or sickness"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Get Well Soon & Feel Better', 'filename' => 'Get Well Soon & Feel Better.mp3'],
        ]);

        $album = Album::create(['order' => 730, 'category_id' => 14,
            'name' => 'Blood Circulation', 'audio_folder' => 'Wellness 1', 'image' => 'Blood Circulation-v1.png',
            'benefits' => '["Promotes blood circulation", "Helps maintain a well mind and body", "Keeps body optimal"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Blood Circulation', 'filename' => 'Blood Circulation.mp3'],
        ]);

        $album = Album::create(['order' => 740, 'category_id' => 14,
            'name' => 'Immune Boost Max', 'audio_folder' => 'Wellness 1', 'image' => 'Immune Boost Max.png',
            'benefits' => '["Maintain immune health", "Support healthy body", "Help strengthen the body’s defenses"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Immune Boost Max', 'filename' => 'Immune Boost Max.mp3'],
        ]);

        $album = Album::create(['order' => 750, 'category_id' => 14,
            'name' => 'DNA Activation Spiral', 'audio_folder' => 'Wellness 1', 'image' => '6-DNA Activation Spiral.png',
            'benefits' => '["DNA activation", "Experience happy feeling", "Take out the negative emotions", "Mood improvement"]'
        ]);
        $album->tags()->attach([4, 6]);
        $album->tracks()->createMany([
            ['name' => 'DNA Activation Spiral', 'filename' => 'DNA Activation Spiral.mp3'],
        ]);

        $album = Album::create(['order' => 760, 'category_id' => 14,
            'name' => 'DNA Repair', 'audio_folder' => 'Wellness 1', 'image' => 'DNA Repair and Regeneration.png',
            'benefits' => '["DNA restoration", "Relaxes the mind and body", "Fatigue removal", "Improvement in overall health"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'DNA Repair', 'filename' => 'DNA Repair.mp3'],
        ]);

        $album = Album::create(['order' => 770, 'category_id' => 14,
            'name' => 'Fall Asleep Fast - Deep Sleep', 'audio_folder' => 'Wellness 1', 'image' => 'Fall Asleep Fast - Deep Sleep-v2.png',
            'benefits' => '["Relaxes the mind and body", "Sleep improvement for those with sleeping problems", "Increased energy throughout the day", "Improve state of well-being"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Fall Asleep Fast - Deep Sleep', 'filename' => 'Fall Asleep Fast - Deep Sleep.mp3'],
        ]);

        $album = Album::create(['order' => 780, 'category_id' => 14,
            'name' => 'Fatigue, Tiredness, Exhaustion Formula', 'audio_folder' => 'Wellness 1', 'image' => 'Fatigue, Tiredness, Exhaustion Formula.png',
            'benefits' => '["Notice a gradual increase and long-lasting energy throughout the day.", "Improves mood", "Helps you sleep better", "Feel refreshed"]'
        ]);
        $album->tags()->attach([4, 6]);
        $album->tracks()->createMany([
            ['name' => 'Fatigue, Tiredness, Exhaustion Formula', 'filename' => 'Fatigue, Tiredness, Exhaustion Formula.mp3'],
        ]);

        // Wellness II

        $album = Album::create(['order' => 790, 'category_id' => 15,
            'name' => 'Male Enhancement', 'audio_folder' => 'Wellness 2', 'image' => 'Male Enhancement.png',
            'benefits' => '["Enhance male potency", "Improve sexual performance", "Keep your partner happy", "Regain confidence"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Male Enhancement', 'filename' => 'Male Enhancement.mp3'],
        ]);

        $album = Album::create(['order' => 800, 'category_id' => 15,
            'name' => 'Strength Boost', 'audio_folder' => 'Wellness 2', 'image' => 'Strength Boost.png',
            'benefits' => '["Promotes vigor and vitality", "Feel energized", "Feel improvement in physical strength"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Strength Boost', 'filename' => 'Strength Boost.mp3'],
        ]);

        $album = Album::create(['order' => 810, 'category_id' => 15,
            'name' => 'Male Hormone', 'audio_folder' => 'Wellness 2', 'image' => 'male hormone-1.png',
            'benefits' => '["Less fat, more muscle", "Stronger bones", "Better libido", "Improved mood"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Male Hormone', 'filename' => 'Male Hormone.mp3'],
        ]);

        $album = Album::create(['order' => 820, 'category_id' => 15,
            'name' => 'Reverse Aging', 'audio_folder' => 'Wellness 2', 'image' => 'Reverse Aging.png',
            'benefits' => '["Restore vitality", "Feel energized", "Experience youthful feeling", "May enhance physical and mental endurance"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Reverse Aging', 'filename' => 'Reverse Aging.mp3'],
        ]);

        $album = Album::create(['order' => 830, 'category_id' => 15,
            'name' => 'Liver Tonic', 'audio_folder' => 'Wellness 2', 'image' => 'Liver Tonic.png',
            'benefits' => '["Promotes healthy liver", "Suppress an overactive liver", "Calm the liver yang", "Calms liver wind agitation"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Liver Tonic', 'filename' => 'Liver Tonic.mp3'],
        ]);

        $album = Album::create(['order' => 840, 'category_id' => 15,
            'name' => 'Support Joint Wellness', 'audio_folder' => 'Wellness 2', 'image' => 'Support Joint Health.png',
            'benefits' => '["Helpful to joint-related problems", "Helps restore mobility", "Promotes healthy and flexible joints", "May increase shock-absorbing ability for joints"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Support Joint Health', 'filename' => 'Support Joint Health.mp3'],
        ]);

        $album = Album::create(['order' => 850, 'category_id' => 15,
            'name' => 'Digestive System Support', 'audio_folder' => 'Wellness 2', 'image' => 'Digestive System Support.png',
            'benefits' => '["Improvement in overall digestive health", "Improves digestion", "Prevents stomach problems"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Digestive System Support', 'filename' => 'Digestive System Support.mp3'],
        ]);

        $album = Album::create(['order' => 860, 'category_id' => 15,
            'name' => 'Heart Energizer', 'audio_folder' => 'Wellness 2', 'image' => 'Heart Energizer.png',
            'benefits' => '["Improve overall emotional state", "Balance heart chakra", "Positive affirmation", "Self-love"]'
        ]);
        $album->tags()->attach([4, 7]);
        $album->tracks()->createMany([
            ['name' => 'Heart Energizer', 'filename' => 'Heart Energizer.mp3'],
        ]);

        // Wellness III

        $album = Album::create(['order' => 870, 'category_id' => 16,
            'name' => 'Herbal Ashwagandha Emulator - Stress Free', 'audio_folder' => 'Wellness 3', 'image' => 'Herbal Ashwagandha Emulator -1.png',
            'benefits' => '["May help reduce stress and anxiety", "May reduce symptoms of depression", "Supports testosterone and fertility in men", "May increase muscle mass and strength"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Herbal Ashwagandha Emulator - Stress Free', 'filename' => 'Herbal Ashwagandha Emulator - Stress Free.mp3'],
        ]);

        $album = Album::create(['order' => 880, 'category_id' => 16,
            'name' => 'Lithium Supplement Emulator', 'audio_folder' => 'Wellness 3', 'image' => 'Lithium Supplement Emulator.png',
            'benefits' => '["Known to fight depression", "Reduce the severity and frequency of mania", "Stabilizes mood", "Supports person with bipolar depression"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Lithium Supplement Emulator', 'filename' => 'Lithium Supplement Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 890, 'category_id' => 16,
            'name' => 'Magnesium Supplement Emulator', 'audio_folder' => 'Wellness 3', 'image' => 'Magnesium Supplement Emulator.png',
            'benefits' => '["Supports exercise performance", "Helps fight depression", "Anti-inflammatory benefits"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Magnesium Supplement Emulator', 'filename' => 'Magnesium Supplement Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 900, 'category_id' => 16,
            'name' => 'Herbal Artemisia Emulator - Digestion', 'audio_folder' => 'Wellness 3', 'image' => 'Herbal Artemisia Emulator - Digestion.png',
            'benefits' => '["Stomach and intestinal upset relief", "May help against parasites", "May help against cough and cold", "Relieves anxiety"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Herbal Artemisia Emulator - Digestion', 'filename' => 'Herbal Artemisia Emulator - Digestion.mp3'],
        ]);

        // $album = Album::create(['order' => 910, 'category_id' => 16,
        //     'name' => 'Herbal Tea Tree Oil Emulator', 'audio_folder' => 'Wellness 3', 'image' => '',
        //     'benefits' => '["Powerful antiseptic", "Known analgesic properties", "Emulates tea tree oil properties"]'
        // ]);
        // $album->tags()->attach([4]);
        // $album->tracks()->createMany([
        //     ['name' => 'Herbal Tea Tree Oil Emulator', 'filename' => 'Herbal Tea Tree Oil Emulator.mp3'],
        // ]);

        $album = Album::create(['order' => 920, 'category_id' => 16,
            'name' => 'Colloidal Silver Emulator', 'audio_folder' => 'Wellness 3', 'image' => 'Colloidal Silver Emulator.png',
            'benefits' => '["Support immune system strength", "Support skin health", "Cleanse your body"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Colloidal Silver Emulator', 'filename' => 'Colloidal Silver Emulator.mp3'],
        ]);

        // Life Force+

        $album = Album::create(['order' => 930, 'category_id' => 17,
            'name' => 'Electric Qi Energy Activator', 'audio_folder' => 'Life Force Plus', 'image' => 'Electric Qi Energy Activator.png',
            'benefits' => '["Improves health and over-all wellness", "Improves mood and increases positive feeling", "Get focus boost"]'
        ]);
        $album->tags()->attach([3, 4]);
        $album->tracks()->createMany([
            ['name' => 'Electric Qi Energy Activator', 'filename' => 'Electric Qi Energy Activator.mp3'],
        ]);

        $album = Album::create(['order' => 940, 'category_id' => 17,
            'name' => 'Qi Energy Flow - Liver Cleanse', 'audio_folder' => 'Life Force Plus', 'image' => 'Qi Energy Flow - Liver Cleanse.png',
            'benefits' => '["Fights depression", "Helps lessen mood swings", "Avoid being frustrated easily", "Avoid inappropriate anger"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Qi Energy Flow - Liver Cleanse', 'filename' => 'Qi Energy Flow - Liver Cleanse.mp3'],
        ]);

        $album = Album::create(['order' => 950, 'category_id' => 17,
            'name' => 'Qi Energy Spark', 'audio_folder' => 'Life Force Plus', 'image' => 'Qi Energy Spark.png',
            'benefits' => '["Fuels you with energy", "Makes you active", "Spread positivity around you", "Relaxed and balanced body and mind"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Qi Energy Spark', 'filename' => 'Qi Energy Spark.mp3'],
        ]);

        $album = Album::create(['order' => 960, 'category_id' => 16,
            'name' => 'Life Force Harmonize 1', 'audio_folder' => 'Life Force Plus', 'image' => 'Life Force Harmonize 1_Life Force Harmonizer 1_v2.png',
            'benefits' => '["Protection from energetic imbalances", "Harmonize your bio-energy field", "Better mood and wellness"]'
        ]);
        $album->tags()->attach([4, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Harmonize 1', 'filename' => 'Life Force Harmonize 1.mp3'],
        ]);

        $album = Album::create(['order' => 970, 'category_id' => 17,
            'name' => 'Life Force Harmonize 2', 'audio_folder' => 'Life Force Plus', 'image' => 'Life Force Harmonize 1_Life Force Harmonizer 2_v2.png',
            'benefits' => '["Protection from energetic imbalances", "Harmonize your bio-energy field", "Better mood and wellness"]'
        ]);
        $album->tags()->attach([4, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Harmonize 2', 'filename' => 'Life Force Harmonize 2.mp3'],
        ]);

        $album = Album::create(['order' => 980, 'category_id' => 17,
            'name' => 'Life Force Harmonize 3', 'audio_folder' => 'Life Force Plus', 'image' => 'Life Force Harmonize 1_Life Force Harmonizer 3_v3.png',
            'benefits' => '["Protection from energetic imbalances", "Harmonize your bio-energy field", "Better mood and wellness"]'
        ]);
        $album->tags()->attach([4, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Harmonize 3', 'filename' => 'Life Force Harmonize 3.mp3'],
        ]);

        $album = Album::create(['order' => 990, 'category_id' => 17,
            'name' => 'Life Force Harmonize 4', 'audio_folder' => 'Life Force Plus', 'image' => 'Life Force Harmonize 1_Life Force Harmonizer 4_v2.png',
            'benefits' => '["Protection from energetic imbalances", "Harmonize your bio-energy field", "Better mood and wellness"]'
        ]);
        $album->tags()->attach([4, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Harmonize 4', 'filename' => 'Life Force Harmonize 4.mp3'],
        ]);

        // Abundance Luck/Fortune

        $album = Album::create(['order' => 1000, 'category_id' => 18,
            'name' => 'Luck Boost', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => '3-Luck Boost.png',
            'benefits' => '["Attracts abundance and feel lucky", "Increase your chance of finding good luck", "Magnetize lucky events"]'
        ]);
        $album->tags()->attach([1, 5, 6]);
        $album->tracks()->createMany([
            ['name' => 'Luck Boost', 'filename' => 'Luck Boost.mp3'],
        ]);

        $album = Album::create(['order' => 1010, 'category_id' => 18,
            'name' => 'Bad Luck Protection', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => '9-Bad Luck Protection.png',
            'benefits' => '["Protection against adversity and misfortune", "Helps in developing strong mind", "Improves mood and increases positive feeling", "Reduces fatigue", "Increase coping mechanism"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Bad Luck Protection', 'filename' => 'Bad Luck Protection.mp3'],
        ]);

        // $album = Album::create(['order' => 1020, 'category_id' => 18,
        //     'name' => 'Remove Blockages', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => '',
        //     'benefits' => '["Increase good luck", "Get good karma", "Improves health and overall wellness", "Optimize peak performance", "Clears the mind, body and spirit of blockages"]'
        // ]);
        // $album->tags()->attach([3, 5, 8]);
        // $album->tracks()->createMany([
        //     ['name' => 'Remove Blockages', 'filename' => 'Remove Blockages.mp3'],
        // ]);

        $album = Album::create(['order' => 1030, 'category_id' => 18,
            'name' => 'Luck Boost 2', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => 'Luck&Fortune_LUCK boost 2.png',
            'benefits' => '["Attracts abundance and feel lucky", "Improves mood and increases positive feeling", "Magnetize lucky events"]'
        ]);
        $album->tags()->attach([1, 5, 6]);
        $album->tracks()->createMany([
            ['name' => 'Luck Boost 2', 'filename' => 'Luck Boost 2.mp3'],
        ]);

        $album = Album::create(['order' => 1040, 'category_id' => 18,
            'name' => 'Lucky Star', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => 'Luck&Fortune_lucky star.png',
            'benefits' => '["Receive luck from astrological bodies", "Boost your attraction for good things"]'
        ]);
        $album->tags()->attach([1, 5, 6]);
        $album->tracks()->createMany([
            ['name' => 'Lucky Star', 'filename' => 'Lucky Star.mp3'],
        ]);

        $album = Album::create(['order' => 1050, 'category_id' => 18,
            'name' => 'Good Fortune', 'audio_folder' => 'Abundance - Luck & Fortune', 'image' => 'Luck&Fortune_good fortune.png',
            'benefits' => '["Helps in developing a strong mind", "Improves mood and increase positive feeling", "Overcome fear", "Bring good fortune", "Helps you start achieving for goals"]'
        ]);
        $album->tags()->attach([1, 3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Good Fortune', 'filename' => 'Good Fortune.mp3'],
        ]);

        // Abundance Job/Career

        $album = Album::create(['order' => 1973, 'category_id' => 19,
            'name' => 'Success - Overcome Fear', 'audio_folder' => 'Abundance - Job Career', 'image' => '10-Overcome Fear.png',
            'benefits' => '["Helps in developing a strong mind", "Improves mood and increase positive feeling", "Overcome fear", "Bring good fortune", "Helps you start achieving for goals"]'
        ]);
        $album->tags()->attach([1, 3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Success - Overcome Fear', 'filename' => 'Success - Overcome Fear.mp3'],
        ]);

        $album = Album::create(['order' => 1974, 'category_id' => 19,
            'name' => 'Balance Power & Action', 'audio_folder' => 'Abundance - Job Career', 'image' => '7-Balance Power & Action.png',
            'benefits' => '["Improve self-actualization", "Opens your mind and put it to a state of calmness", "Reduces decision fatigue", "Have a clear understanding of what\'s important in your life", "Gain focus", "Achieve inner peace"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Balance Power & Action', 'filename' => 'Balance Power & Action.mp3'],
        ]);

        // $album = Album::create(['order' => 1080, 'category_id' => 19,
        //     'name' => 'Calm and Confident', 'audio_folder' => 'Abundance - Job Career', 'image' => '',
        //     'benefits' => '["Helps maintain calmness under pressure", "Clears and relieves the mind from stress", "Induces mental relaxation", "Boost confidence"]'
        // ]);
        // $album->tags()->attach([3, 5]);
        // $album->tracks()->createMany([
        //     ['name' => 'Calm and Confident', 'filename' => 'Calm and Confident.mp3'],
        // ]);

        // $album = Album::create(['order' => 1090, 'category_id' => 19,
        //     'name' => 'Balance Work & Relationships', 'audio_folder' => 'Abundance - Job Career', 'image' => '',
        //     'benefits' => '["Leesens stress related to career / business and love life", "Maintain a balance between work and personal life", "Experience a sense of fulfillment and contentment", "Improve productivity and performance at work", "Avoid conflicts between personal life and career"]'
        // ]);
        // $album->tags()->attach([3, 5, 7, 8]);
        // $album->tracks()->createMany([
        //     ['name' => 'Balance Work & Relationships', 'filename' => 'Balance Work & Relationships.mp3'],
        // ]);

        $album = Album::create(['order' => 1975, 'category_id' => 19,
            'name' => 'Financial Clarity', 'audio_folder' => 'Abundance - Job Career', 'image' => 'Job-Career_financialClarity.png',
            'benefits' => '["Clear insight and understanding of financial matters", "Clear blockages to financial success"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Financial Clarity', 'filename' => 'Financial Clarity.mp3'],
        ]);

        $album = Album::create(['order' => 1976, 'category_id' => 19,
            'name' => 'Financial Genius', 'audio_folder' => 'Abundance - Job Career', 'image' => 'Job-Career_financial genius.png',
            'benefits' => '["Enhance ability to attain finances", "Creative problem solving ", "Increase in ideas and inspiration"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Financial Genius', 'filename' => 'Financial Genius.mp3'],
        ]);

        $album = Album::create(['order' => 1977, 'category_id' => 19,
            'name' => 'Financial Stress Relief', 'audio_folder' => 'Abundance - Job Career', 'image' => 'Job-Career_financial stress relief.png',
            'benefits' => '["Relieve stress caused by financial issues", "Find peace", "Rediscover your path "]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Financial Stress Relief', 'filename' => 'Financial Stress Relief.mp3'],
        ]);

        // Abundance Success

        $album = Album::create(['order' => 1130, 'category_id' => 20,
            'name' => 'Success - Focus', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_FOCUS.png',
            'benefits' => '["Sharpen mental and energetic focus", "Increase effectiveness of efforts", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Focus', 'filename' => 'Success - Focus.mp3'],
        ]);

        $album = Album::create(['order' => 1140, 'category_id' => 20,
            'name' => 'Success - Teamwork', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_TEAMWORK.png',
            'benefits' => '["Boost teamwork and cooperation", "Remove discord in organizations", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Teamwork', 'filename' => 'Success - Teamwork.mp3'],
        ]);

        $album = Album::create(['order' => 1150, 'category_id' => 20,
            'name' => 'Success - Achiever', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_ACHIEVER.png',
            'benefits' => '["Improved work ethic and stamina", "Boost motivation and positive energy", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Achiever', 'filename' => 'Success - Achiever.mp3'],
        ]);

        $album = Album::create(['order' => 1160, 'category_id' => 20,
            'name' => 'Success - Wealth', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_WEALTH.png',
            'benefits' => '["Feeling of attaining wealth", "Energetic affirmation and programming of having infinite wealth", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Wealth', 'filename' => 'Success - Wealth.mp3'],
        ]);

        $album = Album::create(['order' => 1170, 'category_id' => 20,
            'name' => 'Success - Foresight', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_FORESIGHT.png',
            'benefits' => '["Boost intuition and understanding of trends", "Foresee events before they happen", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Foresight', 'filename' => 'Success - Foresight.mp3'],
        ]);

        $album = Album::create(['order' => 1180, 'category_id' => 20,
            'name' => 'Success - Discernment', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_DISCERNMENT.png',
            'benefits' => '["Gain wisdom to discern crucial decisions", "Gain deep understanding", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Discernment', 'filename' => 'Success - Discernment.mp3'],
        ]);

        $album = Album::create(['order' => 1190, 'category_id' => 20,
            'name' => 'Success - Attainment', 'audio_folder' => 'Abundance - Success', 'image' => 'SUCCESS_ATTAINMENT.png',
            'benefits' => '["Feeling of attaining success", "Energetic affirmation and programming of being successful", "Achieve more success faster"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Success - Attainment', 'filename' => 'Success - Attainment.mp3'],
        ]);

        // Abundance Happiness

        $album = Album::create(['order' => 1200, 'category_id' => 21,
            'name' => 'Balance & Clarity', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Balance & Clarity.jpg',
            'benefits' => '["Opens your mind and put it to a state of calmness", "Reduces decision fatigue", "Have a clear understanding of what\'s important in your life", "Gain focus", "Achieve inner peace", "Bring your inner purity and a deeper sense of well being"]'
        ]);
        $album->tags()->attach([2, 3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Balance & Clarity', 'filename' => 'Balance & Clarity.mp3'],
        ]);

        $album = Album::create(['order' => 1210, 'category_id' => 21,
            'name' => 'Balance Emotions', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Balance Emotions.jpg',
            'benefits' => '["Attain mental flexibility", "Control your reactions during stressful situations", "Improve concentration, consciousness", "Feel motivated and happy", "Promotes stabilization between our mind and body"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Balance Emotions', 'filename' => 'Balance Emotions.mp3'],
        ]);

        $album = Album::create(['order' => 1220, 'category_id' => 21,
            'name' => 'Calm and Confident', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Calm and Confident.jpg',
            'benefits' => '["Helps maintain calmness under pressure", "Clears and relieves the mind from stress", "Induces mental relaxation", "Boost confidence"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Calm and Confident', 'filename' => 'Calm and Confident.mp3'],
        ]);

        $album = Album::create(['order' => 1230, 'category_id' => 21,
            'name' => 'Calm Emotions - Control Anger', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Calm Emotions - Control Anger.png',
            'benefits' => '["Remain calm and control your anger", "Control your reactions during stressful situations", "Feel in control and able to deal with various situations", "Avoid destructive impulse reactions", "Make calm and logical decisions"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Calm Emotions - Control Anger', 'filename' => 'Calm Emotions - Control Anger.mp3'],
        ]);

        $album = Album::create(['order' => 1240, 'category_id' => 21,
            'name' => 'Happy Thoughts Feel Happier', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Happy Thoughts Feel Happier copy.jpg',
            'benefits' => '["Improves mood and feelings", "Increase optimistic thoughts", "Boost happy feeling", "Helps reduce fatigue and anxiety", "Attracts luck and induce feeling of success"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Happy Thoughts Feel Happier', 'filename' => 'Happy Thoughts Feel Happier.mp3'],
        ]);

        $album = Album::create(['order' => 1250, 'category_id' => 21,
            'name' => 'Inner Peace and Joy', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Inner Peace and Joy.jpg',
            'benefits' => '["Feel deep inner peace", "Experience joy and happiness", "Find contentment and satisfaction"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Inner Peace and Joy', 'filename' => 'Inner Peace and Joy.mp3'],
        ]);

        $album = Album::create(['order' => 1260, 'category_id' => 21,
            'name' => 'PTSD Trauma Recovery', 'audio_folder' => 'Abundance - Happiness', 'image' => 'PTSD Trauma Recovery.png',
            'benefits' => '["Helps avoid feelings of distress when reminded of a tragic event", "Helps avoid flashbacks, nightmares of either frightening things or event", "Feel interested in life and daily activities", "Helps against detachment from people around you", "Have a positive outlook of your future"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'PTSD Trauma Recovery', 'filename' => 'PTSD Trauma Recovery.mp3'],
        ]);

        $album = Album::create(['order' => 1270, 'category_id' => 21,
            'name' => 'Relieve Anxiety', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Relieve Anxiety.jpg',
            'benefits' => '["Reduce anxiety and improves the mood", "Increase optimistic thoughts and reduce overthinking", "Confidence boost", "Feel calm and relaxed"]'
        ]);
        $album->tags()->attach([3, 4, 8]);
        $album->tracks()->createMany([
            ['name' => 'Relieve Anxiety', 'filename' => 'Relieve Anxiety.mp3'],
        ]);

        $album = Album::create(['order' => 1280, 'category_id' => 21,
            'name' => 'Solid and Grounded', 'audio_folder' => 'Abundance - Happiness', 'image' => '5-Solid and Grounded.png',
            'benefits' => '["Improves sleep", "Stress management", "Improves immunity", "Increase positive feeling and emotion"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Solid and Grounded', 'filename' => 'Solid and Grounded.mp3'],
        ]);

        // $album = Album::create(['order' => 1290, 'category_id' => 21,
        //     'name' => 'Overcome Fear', 'audio_folder' => 'Abundance - Happiness', 'image' => '',
        //     'benefits' => '[]'
        // ]);
        // // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => 'Overcome Fear', 'filename' => 'Overcome Fear.mp3'],
        // ]);

        $album = Album::create(['order' => 1300, 'category_id' => 21,
            'name' => 'Stop Addictions, Bad Habits & Depression', 'audio_folder' => 'Abundance - Happiness', 'image' => 'Stop Addictions, Bad Habits & Depression.png',
            'benefits' => '["Helps with stopping alcohol or substance abuse", "Stop bad habits like gambling and other vices", "Live a happier life"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Stop Addictions, Bad Habits & Depression', 'filename' => 'Stop Addictions, Bad Habits & Depression.mp3'],
        ]);

        // Abundance Love

        $album = Album::create(['order' => 1310, 'category_id' => 22,
            'name' => 'Balance Work & Relationships', 'audio_folder' => 'Abundance - Love', 'image' => '8-Balance Work & Relationships.png',
            'benefits' => '["Leesens stress related to career / business and love life", "Maintain a balance between work and personal life", "Experience a sense of fulfillment and contentment", "Improve productivity and performance at work", "Avoid conflicts between personal life and career"]'
        ]);
        $album->tags()->attach([3, 5, 7, 8]);
        $album->tracks()->createMany([
            ['name' => 'Balance Work & Relationships', 'filename' => 'Balance Work & Relationships.mp3'],
        ]);

        $album = Album::create(['order' => 1320, 'category_id' => 22,
            'name' => 'Heart & Mind Connection', 'audio_folder' => 'Abundance - Love', 'image' => 'Heart & Mind Connection.png',
            'benefits' => '["Relieve stress", "Achieve inner peace and harmony", "Deep meditation", "Improve immune system", "Prepare the body for traumatic situations", "Gain better mind control"]'
        ]);
        $album->tags()->attach([2, 3, 5, 7, 8]);
        $album->tracks()->createMany([
            ['name' => 'Heart & Mind Connection', 'filename' => 'Heart & Mind Connection.mp3'],
        ]);

        $album = Album::create(['order' => 1330, 'category_id' => 22,
            'name' => 'Romance Rose Essence', 'audio_folder' => 'Abundance - Love', 'image' => 'Romance Rose Essence.png',
            'benefits' => '["Build a strong, healthy love for one’s self to share with others", "Helps with the grieving process particularly after trauma or death", "Build intimate relationships, not necessarily between lovers", "Helps protect any intimate relationship"]'
        ]);
        $album->tags()->attach([7]);
        $album->tracks()->createMany([
            ['name' => 'Romance Rose Essence', 'filename' => 'Romance Rose Essence.mp3'],
        ]);

        $album = Album::create(['order' => 1340, 'category_id' => 22,
            'name' => 'Understand Opposite Gender', 'audio_folder' => 'Abundance - Love', 'image' => 'Understand Opposite Gender.png',
            'benefits' => '["Improve chances of finding romance", "Avoid conflicts with your romantic partner", "Attract people by understanding what they like", "Make your romantic partner happy"]'
        ]);
        $album->tags()->attach([7]);
        $album->tracks()->createMany([
            ['name' => 'Understand Opposite Gender', 'filename' => 'Understand Opposite Gender.mp3'],
        ]);

        $album = Album::create(['order' => 1350, 'category_id' => 22,
            'name' => 'Venus Mars - Sensual Balance', 'audio_folder' => 'Abundance - Love', 'image' => 'Venus Mars - Sensual Balance.png',
            'benefits' => '["Balance wild and lustful love and romantic love", "Determine lasting relationship", "Contain strong romantic energies", "Enjoy a happy relationship"]'
        ]);
        $album->tags()->attach([7]);
        $album->tracks()->createMany([
            ['name' => 'Venus Mars - Sensual Balance', 'filename' => 'Venus Mars - Sensual Balance.mp3'],
        ]);

        $album = Album::create(['order' => 1360, 'category_id' => 22,
            'name' => 'Venus Pluto - Sensual Romance', 'audio_folder' => 'Abundance - Love', 'image' => 'Venus Pluto - Sensual Romance.png',
            'benefits' => '["Enjoy intense, passionate relationship", "Handle overwhelming attraction", "Avoid toxicity in your relationships", "Possess the capacity for enduring love"]'
        ]);
        $album->tags()->attach([7]);
        $album->tracks()->createMany([
            ['name' => 'Venus Pluto - Sensual Romance', 'filename' => 'Venus Pluto - Sensual Romance.mp3'],
        ]);

        // Brain

        $album = Album::create(['order' => 1370, 'category_id' => 23,
            'name' => 'Brain Boost - Memory & Cognition', 'audio_folder' => 'Brain', 'image' => 'HQ- Memory & Cognition.png',
            'benefits' => '["Helps improve memory", "Supports cognitive processes", "Improve perception and understanding", "Stay smart, sharp, and focused"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Memory & Cognition', 'filename' => 'Brain Boost - Memory & Cognition.mp3'],
        ]);

        $album = Album::create(['order' => 1380, 'category_id' => 23,
            'name' => 'Brain Boost - Optimizer', 'audio_folder' => 'Brain', 'image' => 'HQ - Optimizer.png',
            'benefits' => '["Maintain peak mental performance", "Enhance creativity", "Sharpen memory", "Handle stressful situations effectively", "Improve brain efficiency"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Optimizer', 'filename' => 'Brain Boost - Optimizer.mp3'],
        ]);

        $album = Album::create(['order' => 1390, 'category_id' => 23,
            'name' => 'Brain Boost - Stamina', 'audio_folder' => 'Brain', 'image' => 'HQ -stamina.png',
            'benefits' => '["Aids in managing stress", "Develops strong mental toughness through continuous use", "Improves confidence and mental resilience", "Ability to endure stressful situations", "Overcome difficult tasks and situations", "Stay focussed to finish tedious or repetitive tasks"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Stamina', 'filename' => 'Brain Boost - Stamina.mp3'],
        ]);

        // Wisdom

        $album = Album::create(['order' => 1400, 'category_id' => 24,
            'name' => 'Wisdom - Intuition & Timing', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Intuition & Timing.png',
            'benefits' => '["Understand vibrations and act on it", "Make decisions more quickly and effectively", "Recognize the nudges of intuition toward that which is best for you"]'
        ]);
        $album->tags()->attach([1, 2, 5]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Intuition & Timing', 'filename' => 'Wisdom - Intuition & Timing.mp3'],
        ]);

        $album = Album::create(['order' => 1410, 'category_id' => 24,
            'name' => 'Wisdom - Human Nature', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Human Nature.png',
            'benefits' => '["Increase your intuition and gut feel", "Improves decision-making skills", "Helps assess the behavior or character of people", "Gauge how people think and anticipate their actions", "Get along with people", "Ability to avoid people who may not be good or you"]'
        ]);
        $album->tags()->attach([1, 2, 5, 7]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Human Nature', 'filename' => 'Wisdom - Human Nature.mp3'],
        ]);

        $album = Album::create(['order' => 1420, 'category_id' => 24,
            'name' => 'Wisdom - Universal Laws', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Universal Laws.png',
            'benefits' => '["Increase the feeling of happiness", "Achieve inner peace and harmony", "Improve relationships", "Attract abundance", "Adapt to new environment", "Improve overall mind and body well-being"]'
        ]);
        $album->tags()->attach([1, 2, 5]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Universal Laws', 'filename' => 'Wisdom - Universal Laws.mp3'],
        ]);

        $album = Album::create(['order' => 1430, 'category_id' => 24,
            'name' => 'Wisdom - Reading People', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Reading People.png',
            'benefits' => '["Increase your intuition and gut feel", "Improves decision-making skills", "Gain the ability to judge other people\'s character and motive"]'
        ]);
        $album->tags()->attach([1, 2, 5, 7]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Reading People', 'filename' => 'Wisdom - Reading People.mp3'],
        ]);

        $album = Album::create(['order' => 1440, 'category_id' => 24,
            'name' => 'Wisdom - Creative Solutions', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Creative Solutions.png',
            'benefits' => '["Enhance focus", "Opens the mind", "Improves organization of thoughts", "Relaxes your mind", "Find the best solution to your problems"]'
        ]);
        $album->tags()->attach([1, 2, 5]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Creative Solutions', 'filename' => 'Wisdom - Creative Solutions.mp3'],
        ]);

        $album = Album::create(['order' => 1450, 'category_id' => 24,
            'name' => 'Wisdom - Build Character', 'audio_folder' => 'Wisdom', 'image' => 'Wisdom - Build Character.png',
            'benefits' => '["Get motivation to start doing accomplishing things", "Induce self-awakening", "Induce self-improvement", "Purification of the mind", "Balanced emotions", "Feel spiritual growth"]'
        ]);
        $album->tags()->attach([1, 2, 5, 7]);
        $album->tracks()->createMany([
            ['name' => 'Wisdom - Build Character', 'filename' => 'Wisdom - Build Character.mp3'],
        ]);

        // Manifesting

        $album = Album::create(['order' => 1460, 'category_id' => 25,
            'name' => 'Manifesting Dreams', 'audio_folder' => 'Manifesting', 'image' => 'manifesting_dreams.png',
            'benefits' => '["Make dreams become reality", "Accelerate the manifesting of your dreams"]'
        ]);
        $album->tags()->attach([5, 6]);
        $album->tracks()->createMany([
            ['name' => 'Manifesting Dreams', 'filename' => 'Manifesting Dreams.mp3'],
        ]);

        $album = Album::create(['order' => 1470, 'category_id' => 25,
            'name' => 'Manifesting Mental Stamina', 'audio_folder' => 'Manifesting', 'image' => 'manifesting_mental stamina.png',
            'benefits' => '["Aids in managing stress", "Develops strong mental toughness through continuous use", "Improves confidence and mental resilience", "Ability to endure stressful situations", "Overcome difficult tasks and situations", "Stay focussed to finish tedious or repetitive tasks"]'
        ]);
        $album->tags()->attach([2, 4, 6]);
        $album->tracks()->createMany([
            ['name' => 'Manifesting Mental Stamina', 'filename' => 'Manifesting Mental Stamina.mp3'],
        ]);

        $album = Album::create(['order' => 1480, 'category_id' => 25,
            'name' => 'Manifesting Ground Thoughts', 'audio_folder' => 'Manifesting', 'image' => 'manifesting_ground thoughts.png',
            'benefits' => '["DNA activation", "Experience happy feeling", "Take out the negative emotions", "Mood improvement"]'
        ]);
        $album->tags()->attach([4, 6]);
        $album->tracks()->createMany([
            ['name' => 'Manifesting Ground Thoughts', 'filename' => 'Manifesting Ground Thoughts.mp3'],
        ]);

        // Meditation / Spiritual

        $album = Album::create(['order' => 1490, 'category_id' => 26,
            'name' => 'Dark Side Purge', 'audio_folder' => 'Meditation Spiritual', 'image' => 'Dark Side Purge.png',
            'benefits' => '["Get rid of negative energy", "Feel happier", "Sharpen your intuition", "Achieve success through positivity"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Dark Side Purge', 'filename' => 'Dark Side Purge.mp3'],
        ]);

        $album = Album::create(['order' => 1500, 'category_id' => 26,
            'name' => 'Deep Transformation', 'audio_folder' => 'Meditation Spiritual', 'image' => '4-Deep Transformation.png',
            'benefits' => '["Helps you deal with sudden changes in your life", "Adapt to your new environment", "Helps you cope with grief and loss", "Build good relationships with new people in your life", "Alleviate stress and pressure brought by sudden life changes"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Deep Transformation', 'filename' => 'Deep Transformation.mp3'],
        ]);

        $album = Album::create(['order' => 1510, 'category_id' => 26,
            'name' => 'Remove Blockages', 'audio_folder' => 'Meditation Spiritual', 'image' => '2-Remove Blockages.png',
            'benefits' => '["Increase good luck", "Get good karma", "Improves health and overall wellness", "Optimize peak performance", "Clears the mind, body and spirit of blockages"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Remove Blockages', 'filename' => 'Remove Blockages.mp3'],
        ]);

        $album = Album::create(['order' => 1520, 'category_id' => 26,
            'name' => 'Remove Negative Energy', 'audio_folder' => 'Meditation Spiritual', 'image' => 'Remove Negative Energy.png',
            'benefits' => '["Feel more optimistic and driven", "Improves mood", "Created positive attitude towards events and situtations", "Helps reduce fatigue", "May help improve sleep"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Remove Negative Energy', 'filename' => 'Remove Negative Energy.mp3'],
        ]);

        $album = Album::create(['order' => 1530, 'category_id' => 26,
            'name' => 'Spiritual Awakening Third Eye', 'audio_folder' => 'Meditation Spiritual', 'image' => 'Spiritual Awakening Third Eye.png',
            'benefits' => '["Increase brain creativity", "Develop Intuition, Insight and Imagination", "See with your mind\'s eye", "Decalcify and clear your pineal gland", "Open your third eye", "Literally make your mind brighter. Enhance memory"]'
        ]);
        $album->tags()->attach([5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Spiritual Awakening Third Eye', 'filename' => 'Spiritual Awakening Third Eye.mp3'],
        ]);

        $album = Album::create(['order' => 1540, 'category_id' => 26,
            'name' => 'Aura Clean', 'audio_folder' => 'Meditation Spiritual', 'image' => 'Aura Clean.png',
            'benefits' => '["Improves health and well-being", "Improves sleep quality", "Feel good and wash away negative auras", "Experience peace of mind and body"]'
        ]);
        $album->tags()->attach([3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Aura Clean', 'filename' => 'Aura Clean.mp3'],
        ]);

        $album = Album::create(['order' => 1550, 'category_id' => 26,
            'name' => 'Cleansing Energy', 'audio_folder' => 'Meditation Spiritual', 'image' => '1-Cleansing Energy.png',
            'benefits' => '["Feel more optimistic and driven", "Improves mood", "Creates positive attitude towards events and situations", "Helps reduce fatigue", "May improve sleep"]'
        ]);
        $album->tags()->attach([3, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Cleansing Energy', 'filename' => 'Cleansing Energy.mp3'],
        ]);

        $album = Album::create(['order' => 1560, 'category_id' => 26,
            'name' => 'Celestial Body Expansion', 'audio_folder' => 'Meditation Spiritual', 'image' => 'Celestial Body Expansion.png',
            'benefits' => '["Expand your energetic and astral body", "Feel expanded and more in tune with the inifinite universe"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Celestial Body Expansion', 'filename' => 'Celestial Body Expansion.mp3'],
        ]);

        // Protection

        $album = Album::create(['order' => 1570, 'category_id' => 27,
            'name' => 'Life Force Shield 1', 'audio_folder' => 'Protection', 'image' => 'HQ_Protection_life force shield 1.png',
            'benefits' => '["Energetic protection from disharmonic frequencies", "Protect your mood, thoughts, bio-energy, spirit and intentions", "Rebalance your energetic frequencies"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Shield 1', 'filename' => 'Life Force Shield 1.mp3'],
        ]);

        $album = Album::create(['order' => 1580, 'category_id' => 27,
            'name' => 'Life Force Shield 2', 'audio_folder' => 'Protection', 'image' => 'HQ_Protection_life force shield 2.png',
            'benefits' => '["Energetic protection from disharmonic frequencies", "Protect your mood, thoughts, bio-energy, spirit and intentions", "Rebalance your energetic frequencies"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Shield 2', 'filename' => 'Life Force Shield 2.mp3'],
        ]);

        $album = Album::create(['order' => 1590, 'category_id' => 27,
            'name' => 'Life Force Shield 3', 'audio_folder' => 'Protection', 'image' => 'HQ_Protection_life force shield 3.png',
            'benefits' => '["Energetic protection from disharmonic frequencies", "Protect your mood, thoughts, bio-energy, spirit and intentions", "Rebalance your energetic frequencies"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Shield 3', 'filename' => 'Life Force Shield 3.mp3'],
        ]);

        $album = Album::create(['order' => 1600, 'category_id' => 27,
            'name' => 'Life Force Shield 4', 'audio_folder' => 'Protection', 'image' => 'HQ_Protection_life force shield 4.png',
            'benefits' => '["Energetic protection from disharmonic frequencies", "Protect your mood, thoughts, bio-energy, spirit and intentions", "Rebalance your energetic frequencies"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Shield 4', 'filename' => 'Life Force Shield 4.mp3'],
        ]);

        $album = Album::create(['order' => 1610, 'category_id' => 27,
            'name' => 'Life Force Shield 5', 'audio_folder' => 'Protection', 'image' => 'life Force Shield 5.png',
            'benefits' => '["Energetic protection from disharmonic frequencies", "Protect your mood, thoughts, bio-energy, spirit and intentions", "Rebalance your energetic frequencies"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Life Force Shield 5', 'filename' => 'Life Force Shield 5.mp3'],
        ]);

        // Beauty I

        $album = Album::create(['order' => 1620, 'category_id' => 28,
            'name' => 'Anti-Aging Telomerase Activation', 'audio_folder' => 'Beauty 1', 'image' => 'Anti-Aging Telomerase Activation-1.png',
            'benefits' => '["DNA restoration", "Maintenance of skin function and proliferation", "Fatigue removal", "Anti-aging benefits"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Anti-Aging Telomerase Activation', 'filename' => 'Anti-Aging Telomerase Activation.mp3'],
        ]);

        $album = Album::create(['order' => 1630, 'category_id' => 28,
            'name' => 'Skin Reverse Aging', 'audio_folder' => 'Beauty 1', 'image' => 'Skin Reverse Aging-1.png',
            'benefits' => '["Restore vitality", "Feel energized", "Experience youthful feeling", "May enhance physical and mental endurance"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Skin Reverse Aging', 'filename' => 'Skin Reverse Aging.mp3'],
        ]);

        $album = Album::create(['order' => 1640, 'category_id' => 28,
            'name' => 'Body Cleansing Detox', 'audio_folder' => 'Beauty 1/Body Cleansing Detox', 'image' => 'Body Cleansing-1.png',
            'benefits' => '["Detox the body and cells", "Protection against negativity", "Improves mood and increase positive feeling"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => 'Body Cleansing Detox 1', 'filename' => 'Body Cleansing Detox 1.mp3'],
            ['name' => 'Body Cleansing Detox 2', 'filename' => 'Body Cleansing Detox 2.mp3'],
        ]);

        $album = Album::create(['order' => 1650, 'category_id' => 28,
            'name' => 'Colon & Bowel Support', 'audio_folder' => 'Beauty 1', 'image' => 'Support Healthy Colon & Bowel -1.png',
            'benefits' => '["Supports bio-energy field of digestion", "Improves energy and state of mind", "Helps with digestion"]'
        ]);
        $album->tags()->attach([4, 5]);
        $album->tracks()->createMany([
            ['name' => 'Support Healthy Colon & Bowel', 'filename' => 'Support Healthy Colon & Bowel.mp3'],
        ]);

        $album = Album::create(['order' => 1660, 'category_id' => 28,
            'name' => 'Chelation Therapy', 'audio_folder' => 'Beauty 1', 'image' => 'Chelation Therapy1-1.png',
            'benefits' => '["Cleanse the body from toxic maetals such as mercury, iron, lead and arsenic", "Helps rejuvenate heart and blood vessels", "Improves liver and kidney function", "Improves over all wellness"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Chelation Therapy', 'filename' => 'Chelation Therapy.mp3'],
        ]);

        $album = Album::create(['order' => 1670, 'category_id' => 28,
            'name' => 'Morgellons Recovery', 'audio_folder' => 'Beauty 1', 'image' => 'Morgellons Recovery-1.png',
            'benefits' => '["Relieves discomfort associated with the disease", "Reduces crawling, biting and stinging sensation", "Improves over-all condition and helps with recovery from Morgellons disease"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Morgellons Recovery', 'filename' => 'Morgellons Recovery.mp3'],
        ]);

        // Beauty II

        $album = Album::create(['order' => 1680, 'category_id' => 29,
            'name' => 'Support Skin & Heart Wellness', 'audio_folder' => 'Beauty 2', 'image' => 'Support Skin & Heart Health-1.png',
            'benefits' => '["Promotes beautiful skin", "Anti-aging, detoxifying and rejuvenating effects on skin", "Emulate various skincare and anti-aging properties"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Support Skin & Heart Health', 'filename' => 'Support Skin & Heart Health.mp3'],
        ]);

        $album = Album::create(['order' => 1690, 'category_id' => 29,
            'name' => 'Skin Restore & Rejuvenate', 'audio_folder' => 'Beauty 2', 'image' => 'Skin Restore & Rejuvenate -1.png',
            'benefits' => '["Encourages cellular turnover to reveal beautiful and smooth skin", "Promotes retaining moisture", "Diminishes appearance of wrinkles and fine lines", "Protection against free radicals"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Skin Restore & Rejuvenate', 'filename' => 'Skin Restore & Rejuvenate.mp3'],
        ]);

        $album = Album::create(['order' => 1700, 'category_id' => 29,
            'name' => 'Skin Rejuvenation', 'audio_folder' => 'Beauty 2/Skin Rejuvenation', 'image' => 'Skin Rejuvenation-1.png',
            'benefits' => '["Promotes beautiful skin", "Anti-aging, detoxifying and rejuvenating effects on skin", "Emulate various skincare and anti-aging properties"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Skin Rejuvenation 1', 'filename' => 'Skin Rejuvenation 1.mp3'],
            ['name' => 'Skin Rejuvenation 2', 'filename' => 'Skin Rejuvenation 2.mp3'],
        ]);

        $album = Album::create(['order' => 1710, 'category_id' => 29,
            'name' => 'Blue Glass Sunbathing', 'audio_folder' => 'Beauty 2/Blue Glass Sunbathing', 'image' => 'Blue Glass Sunbathing-1.png',
            'benefits' => '["Boost immune system", "Improves mood", "Emulates blue glass sunbathing effects on skin"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Blue Glass Sunbathing Effect 1', 'filename' => 'Blue Glass Sunbathing Effect 1.mp3'],
            ['name' => 'Blue Glass Sunbathing Effect 2', 'filename' => 'Blue Glass Sunbathing Effect 2.mp3'],
        ]);

        $album = Album::create(['order' => 1720, 'category_id' => 29,
            'name' => 'Healthy Gall Bladder', 'audio_folder' => 'Beauty 2/Healthy Gall Bladder', 'image' => 'Healthy Gall Bladder-1.png',
            'benefits' => '["Supports gall bladder bio-energy field"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Healthy Gall Bladder 1', 'filename' => 'Healthy Gall Bladder 1.mp3'],
            ['name' => 'Healthy Gall Bladder 2', 'filename' => 'Healthy Gall Bladder 2.mp3'],
        ]);

        // Skin Care

        $album = Album::create(['order' => 1730, 'category_id' => 30,
            'name' => 'DMAE Emulator', 'audio_folder' => 'Skin Care', 'image' => 'DMAE Emulator-1.png',
            'benefits' => '["Emulates DMAE Effects", "Anti-aging benefits for the skin", "Positively improves your mood"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'DMAE Emulator', 'filename' => 'DMAE Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1730, 'category_id' => 30,
            'name' => 'Sulfur Skin Care Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Sulfur Skin Care Emulator-1.png',
            'benefits' => '["Emulates Sulfur Effects", "Cleansing"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Sulfur Skin Care Emulator', 'filename' => 'Sulfur Skin Care Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1740, 'category_id' => 30,
            'name' => 'Tea Tree Oil Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Tea Tree Oil Emulator-1.png',
            'benefits' => '["Emulates tea tree oil Effects", "Cleansing"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Tea Tree Oil Emulator', 'filename' => 'Tea Tree Oil Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1750, 'category_id' => 30,
            'name' => 'Chrysanthemum Tea Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Chrysanthemum Tea Emulator1.png',
            'benefits' => '["Emulates Chrysanthemum Tea Effects", "Calming", "Cleansing"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Chrysanthemum Tea Emulator', 'filename' => 'Chrysanthemum Tea Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1760, 'category_id' => 30,
            'name' => 'Amethyst Quartz Crystal Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Amethyst Quartz Cystal Emulator-1.png',
            'benefits' => '["Crown chakra boost", "Enhances psychic abilities", "Boosts energetic vibration"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Amethyst Quartz Cystal Emulator', 'filename' => 'Amethyst Quartz Cystal Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1770, 'category_id' => 30,
            'name' => 'Chaparral Herb Emulator', 'audio_folder' => 'Skin Care/Chaparral Herb Emulator', 'image' => 'Chaparral Herb Emulator 1-1.png',
            'benefits' => '["Emulates chaparral herb effects", "Soothing", "Cleansing"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Chaparral Herb Emulator 1', 'filename' => 'Chaparral Herb Emulator 1.mp3'],
            ['name' => 'Chaparral Herb Emulator 2', 'filename' => 'Chaparral Herb Emulator 2.mp3'],
        ]);

        $album = Album::create(['order' => 1780, 'category_id' => 30,
            'name' => 'Chelated Copper Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Chelated Copper Emulator-1.png',
            'benefits' => '["Emulates chelated copper effects", "Cleansing", "Wellness"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Chelated Copper Emulator', 'filename' => 'Chelated Copper Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 1790, 'category_id' => 30,
            'name' => 'Sunshine Vitamin D Emulator', 'audio_folder' => 'Skin Care', 'image' => 'Sunshine Vitamin D Emulator -1.png',
            'benefits' => '["Emulates Vitamin D effects", "Helps boost mood and energy", "Strengthens the immune system"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Sunshine Vitamin D Emulator', 'filename' => 'Sunshine Vitamin D Emulator.mp3'],
        ]);

        // Fitness

        $album = Album::create(['order' => 1800, 'category_id' => 31,
            'name' => 'Garcinia Cambogia Extract - Weight Loss', 'audio_folder' => 'Weight Loss/Garcinia Cambogia Extract - Weight Loss', 'image' => 'Garcinia Cambogia Extract - Weight Loss_1_____v1.png',
            'benefits' => '["Improve athletic performance for burning fat"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Garcinia Cambogia Extract for Weight Loss 1', 'filename' => 'Garcinia Cambogia Extract for Weight Loss 1.mp3'],
            ['name' => 'Garcinia Cambogia Extract for Weight Loss 2', 'filename' => 'Garcinia Cambogia Extract for Weight Loss 2.mp3'],
            ['name' => 'Garcinia Cambogia Extract for Weight Loss 3', 'filename' => 'Garcinia Cambogia Extract for Weight Loss 3.mp3'],
            ['name' => 'Garcinia Cambogia Extract for Weight Loss 4', 'filename' => 'Garcinia Cambogia Extract for Weight Loss 4.mp3'],
            ['name' => 'Garcinia Cambogia Extract for Weight Loss 5', 'filename' => 'Garcinia Cambogia Extract for Weight Loss 5.mp3'],
        ]);

        $album = Album::create(['order' => 1810, 'category_id' => 31,
            'name' => 'Green Tea Emulator - Weight Loss', 'audio_folder' => 'Weight Loss/Green Tea Emulator - Weight Loss', 'image' => 'Green Tea Emulator - Weight Loss_1____v1.png',
            'benefits' => '["Fitness properties", "Better brain"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Green Tea Emulator for Weight Loss 1', 'filename' => 'Green Tea Emulator for Weight Loss 1.mp3'],
            ['name' => 'Green Tea Emulator for Weight Loss 2', 'filename' => 'Green Tea Emulator for Weight Loss 2.mp3'],
            ['name' => 'Green Tea Emulator for Weight Loss 3', 'filename' => 'Green Tea Emulator for Weight Loss 3.mp3'],
            ['name' => 'Green Tea Emulator for Weight Loss 4', 'filename' => 'Green Tea Emulator for Weight Loss 4.mp3'],
        ]);

        $album = Album::create(['order' => 1820, 'category_id' => 31,
            'name' => 'Appetite Suppressant', 'audio_folder' => 'Weight Loss/Appetite Suppressant', 'image' => 'Appetite Suppressant - Weight Loss_1____v1.png',
            'benefits' => '["Helps in controlling hunger pangs", "Provides Relaxation"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Appetite Suppressant for Weight Loss 1', 'filename' => 'Appetite Suppressant for Weight Loss 1.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 2', 'filename' => 'Appetite Suppressant for Weight Loss 2.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 3', 'filename' => 'Appetite Suppressant for Weight Loss 3.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 4', 'filename' => 'Appetite Suppressant for Weight Loss 4.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 5', 'filename' => 'Appetite Suppressant for Weight Loss 5.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 6', 'filename' => 'Appetite Suppressant for Weight Loss 6.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 7', 'filename' => 'Appetite Suppressant for Weight Loss 7.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 8', 'filename' => 'Appetite Suppressant for Weight Loss 8.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 9', 'filename' => 'Appetite Suppressant for Weight Loss 9.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 10', 'filename' => 'Appetite Suppressant for Weight Loss 10.mp3'],
            ['name' => 'Appetite Suppressant for Weight Loss 11', 'filename' => 'Appetite Suppressant for Weight Loss 11.mp3'],
        ]);

        $album = Album::create(['order' => 1830, 'category_id' => 31,
            'name' => 'Spirulina Emulator - Weight Loss', 'audio_folder' => 'Weight Loss/Spirulina Emulator - Weight Loss', 'image' => 'Spirulina Emulator - Weight Loss_v1____v1.png',
            'benefits' => '["Powerful supplement for wellness"]'
        ]);
        $album->tags()->attach([4]);
        $album->tracks()->createMany([
            ['name' => 'Spirulina Emulator for Weight Loss 1', 'filename' => 'Spirulina Emulator for Weight Loss 1.mp3'],
            ['name' => 'Spirulina Emulator for Weight Loss 2', 'filename' => 'Spirulina Emulator for Weight Loss 2.mp3'],
            ['name' => 'Spirulina Emulator for Weight Loss 3', 'filename' => 'Spirulina Emulator for Weight Loss 3.mp3'],
            ['name' => 'Spirulina Emulator for Weight Loss 4', 'filename' => 'Spirulina Emulator for Weight Loss 4.mp3'],
            ['name' => 'Spirulina Emulator for Weight Loss 5', 'filename' => 'Spirulina Emulator for Weight Loss 5.mp3'],
            ['name' => 'Spirulina Emulator for Weight Loss 6', 'filename' => 'Spirulina Emulator for Weight Loss 6.mp3'],
        ]);

        // Abundance+

        $album = Album::create(['order' => 1840, 'category_id' => 32,
            'name' => 'Attract Abundance', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_attract abundance.png',
            'benefits' => '["Experience emotions and feelings of being lucky", "Attracts success and abundance", "Induce internal patterns of behaviour that attracts fortunte events", "Optimize peak performance"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Attract Abundance', 'filename' => 'Attract Abundance.mp3'],
        ]);

        $album = Album::create(['order' => 1850, 'category_id' => 32,
            'name' => 'Magnetic Attraction', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Magnetic Attraction.png',
            'benefits' => '["Increase attraction and attention from the opposite gender", "Get positive reception from other people", "Improve chances of finding romance", "Induce high magnetization"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Magnetic Attraction', 'filename' => 'Magnetic Attraction.mp3'],
        ]);

        $album = Album::create(['order' => 1860, 'category_id' => 32,
            'name' => 'Attract Money & Resources', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Attract Money & Resources.png',
            'benefits' => '["Improves chances of earning more money", "Helps gain instinct and best decision for career or business"]'
        ]);
        $album->tags()->attach([5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Attract Money & Resources', 'filename' => 'Attract Money & Resources.mp3'],
        ]);

        $album = Album::create(['order' => 1870, 'category_id' => 32,
            'name' => 'Success Programming', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Success Programming.png',
            'benefits' => '["Experience the feeling of success", "Get good karma", "Attracts positive surprises or coincidences", "Magnetize fortunate events and outcomes"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Success Programming', 'filename' => 'Success Programming.mp3'],
        ]);

        $album = Album::create(['order' => 1880, 'category_id' => 32,
            'name' => 'Health Wealth Wisdom', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Health, Wealth & Wisdom.png',
            'benefits' => '["Resonate peak performance", "Attract good health, life of wealth and wisdom for success", "Get good karma", "Experience positive surprises or coincidences"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Health Wealth Wisdom', 'filename' => 'Health Wealth Wisdom.mp3'],
        ]);

        $album = Album::create(['order' => 1890, 'category_id' => 32,
            'name' => 'Manifestation Meditation Amplifier', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Manifestation Meditation Amplifier.png',
            'benefits' => '["Increase sensible and realistic conscious aims of life", "Helps to be more responsible and goal-driven", "Develop real discipline and organization", "Get focus boost", "Improves mood and feelings"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation Meditation Amplifier', 'filename' => 'Manifestation Meditation Amplifier.mp3'],
        ]);

        $album = Album::create(['order' => 1900, 'category_id' => 32,
            'name' => 'Manifesting Abundance Motivator', 'audio_folder' => 'Abundance Plus', 'image' => 'AP_Manifesting Abundance Motivator.png',
            'benefits' => '["Motivates to attract wealth", "Helps develop self-discipline and strong mindset", "Get focus boost"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifesting Abundance Motivator', 'filename' => 'Manifesting Abundance Motivator.mp3'],
        ]);

        // Abundance Money

        $album = Album::create(['order' => 1910, 'category_id' => 33,
            'name' => 'Money Mantra 1', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Mantra 1.png',
            'benefits' => '["Powerful energetic programming for attracting money"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Mantra 1', 'filename' => 'Money Mantra 1.mp3'],
        ]);

        $album = Album::create(['order' => 1920, 'category_id' => 33,
            'name' => 'Money Mantra 2', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Mantra 2.png',
            'benefits' => '["Powerful energetic programming for attracting money"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Mantra 2', 'filename' => 'Money Mantra 2.mp3'],
        ]);

        $album = Album::create(['order' => 1930, 'category_id' => 33,
            'name' => 'Money Mantra 3', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Mantra 3.png',
            'benefits' => '["Powerful energetic programming for attracting money"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Mantra 3', 'filename' => 'Money Mantra 3.mp3'],
        ]);

        $album = Album::create(['order' => 1940, 'category_id' => 33,
            'name' => 'Money Mantra 4', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Mantra 4.png',
            'benefits' => '["Powerful energetic programming for attracting money"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Mantra 4', 'filename' => 'Money Mantra 4.mp3'],
        ]);

        $album = Album::create(['order' => 1950, 'category_id' => 33,
            'name' => 'Money Mantra 5', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Mantra 5.png',
            'benefits' => '["Powerful energetic programming for attracting money"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Mantra 5', 'filename' => 'Money Mantra 5.mp3'],
        ]);

        $album = Album::create(['order' => 1960, 'category_id' => 33,
            'name' => 'Money Accumulate', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money Accumulate.png',
            'benefits' => '["Powerful energetic programming for accumulating money and resources"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Accumulate', 'filename' => 'Money Accumulate.mp3'],
        ]);

        $album = Album::create(['order' => 1970, 'category_id' => 33,
            'name' => 'Money Solidify Profits', 'audio_folder' => 'Abundance - Money', 'image' => 'abundance money_Money SOlidify Profits.png',
            'benefits' => '["Powerful energetic programming for solidifying monetary gain"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Money Solidify Profits', 'filename' => 'Money Solidify Profits.mp3'],
        ]);

        // Abundance Business

        $album = Album::create(['order' => 1980, 'category_id' => 34,
            'name' => 'Abundance Business 1', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 1.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 1', 'filename' => 'Abundance Business 1.mp3'],
        ]);

        $album = Album::create(['order' => 1990, 'category_id' => 34,
            'name' => 'Abundance Business 2', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 2.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 2', 'filename' => 'Abundance Business 2.mp3'],
        ]);

        $album = Album::create(['order' => 2000, 'category_id' => 34,
            'name' => 'Abundance Business 3', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 3.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 3', 'filename' => 'Abundance Business 3.mp3'],
        ]);

        $album = Album::create(['order' => 2010, 'category_id' => 34,
            'name' => 'Abundance Business 4', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 4.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 4', 'filename' => 'Abundance Business 4.mp3'],
        ]);

        $album = Album::create(['order' => 2020, 'category_id' => 34,
            'name' => 'Abundance Business 5', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 5.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 5', 'filename' => 'Abundance Business 5.mp3'],
        ]);

        $album = Album::create(['order' => 2030, 'category_id' => 34,
            'name' => 'Abundance Business 6', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 6.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 6', 'filename' => 'Abundance Business 6.mp3'],
        ]);

        $album = Album::create(['order' => 2040, 'category_id' => 34,
            'name' => 'Abundance Business 7', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 7.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 7', 'filename' => 'Abundance Business 7.mp3'],
        ]);

        $album = Album::create(['order' => 2050, 'category_id' => 34,
            'name' => 'Abundance Business 8', 'audio_folder' => 'Abundance - Business', 'image' => 'abundance business_Business 8.png',
            'benefits' => '["Powerful energetic programming for massive business success", "Attract more customers, revenue and resources", "Accelerate your business growth with unlimited source energy"]'
        ]);
        $album->tags()->attach([1, 6]);
        $album->tracks()->createMany([
            ['name' => 'Abundance Business 8', 'filename' => 'Abundance Business 8.mp3'],
        ]);

        // Super Brain

        $album = Album::create(['order' => 2060, 'category_id' => 35,
            'name' => 'Brain & Nerve Support', 'audio_folder' => 'Super Brain', 'image' => 'SB -Brain & Nerve Support.png',
            'benefits' => '["Stay smart, sharp, and focussed", "Promotes cognition functions and memory", "Improves concentration and focus", "Promotes brain fitness"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain & Nerve Support', 'filename' => 'Brain & Nerve Support.mp3'],
        ]);

        $album = Album::create(['order' => 2070, 'category_id' => 35,
            'name' => 'Brain Boost - Concentration', 'audio_folder' => 'Super Brain', 'image' => 'SB - Concentration.png',
            'benefits' => '["Improves concentration", "Enhance the ability to focus", "Improve memory and work function", "Enhance organizational thinking"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Concentration', 'filename' => 'Brain Boost - Concentration.mp3'],
        ]);

        $album = Album::create(['order' => 2080, 'category_id' => 35,
            'name' => 'Brain Boost - Intelligence', 'audio_folder' => 'Super Brain', 'image' => 'SB - Intelligence.png',
            'benefits' => '["Enhance cognitive processes", "Improve problem-solving abilities", "Learn and understand how to deal with difficult situations", "Ability to adapt to the changes in the environment", "Improves concentration and focus"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Intelligence', 'filename' => 'Brain Boost - Intelligence.mp3'],
        ]);

        $album = Album::create(['order' => 2090, 'category_id' => 35,
            'name' => 'Brain Boost - Memory & Cognition', 'audio_folder' => 'Super Brain', 'image' => 'SB - Memory & Cognition.png',
            'benefits' => '["Helps improve memory", "Supports cognitive processes", "Improve perception and understanding", "Stay smart, sharp, and focused"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Memory & Cognition', 'filename' => 'Brain Boost - Memory & Cognition.mp3'],
        ]);

        $album = Album::create(['order' => 2100, 'category_id' => 35,
            'name' => 'Brain Boost - Optimizer', 'audio_folder' => 'Super Brain', 'image' => 'SB - Optimizer.png',
            'benefits' => '["Maintain peak mental performance", "Enhance creativity", "Sharpen memory", "Handle stressful situations effectively", "Improve brain efficiency"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Optimizer', 'filename' => 'Brain Boost - Optimizer.mp3'],
        ]);

        $album = Album::create(['order' => 2110, 'category_id' => 35,
            'name' => 'Brain Boost - Problem Solving', 'audio_folder' => 'Super Brain', 'image' => 'SB - Problem Solving.png',
            'benefits' => '["Enhance problem solving ability", "Induce the feeling of enjoyment over studying and thinking deeply in solitude", "Induce discrimination, rationality", "Become a good decision-maker", "Learn and understand how to deal with difficult situations"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Problem Solving', 'filename' => 'Brain Boost - Problem Solving.mp3'],
        ]);

        $album = Album::create(['order' => 2120, 'category_id' => 35,
            'name' => 'Brain Boost - Stamina', 'audio_folder' => 'Super Brain', 'image' => 'SB -stamina.png',
            'benefits' => '["Aids in managing stress", "Develops strong mental toughness through continuous use", "Improves confidence and mental resilience", "Ability to endure stressful situations", "Overcome difficult tasks and situations", "Stay focussed to finish tedious or repetitive tasks"]'
        ]);
        $album->tags()->attach([2, 4]);
        $album->tracks()->createMany([
            ['name' => 'Brain Boost - Stamina', 'filename' => 'Brain Boost - Stamina.mp3'],
        ]);

        // Manifesting+

        $album = Album::create(['order' => 2130, 'category_id' => 36,
            'name' => 'Manifestation - Focus & Energy', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Focus & Energy.png',
            'benefits' => '["Feel a boost on your energy that can last throughout the day", "Increase focus and attentiveness", "Increase task accomplishments"]'
        ]);
        $album->tags()->attach([1, 2, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Focus & Energy', 'filename' => 'Manifestation - Focus & Energy.mp3'],
        ]);

        $album = Album::create(['order' => 2140, 'category_id' => 36,
        'name' => 'Manifestation - Get Unstuck', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Get Unstuck.png',
            'benefits' => '["Decrease procrastination", "Accomplish things at the right time", "Develops self-discipline and organization", "Achieve your goals by taking action"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Get Unstuck', 'filename' => 'Manifestation - Get Unstuck.mp3'],
        ]);

        $album = Album::create(['order' => 2150, 'category_id' => 36,
        'name' => 'Manifestation - Job Well Done', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Job Well Done.png',
            'benefits' => '["Successfully accomplish and finish tasks", "Always be at the state of maximizing your full capacity", "Impress the people around you and even yourself", "Push yourself to greater heights", "Avoid distractions to achieve your tasks or goals", "Have the energy to give your best effort"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Job Well Done', 'filename' => 'Manifestation - Job Well Done.mp3'],
        ]);

        $album = Album::create(['order' => 2160, 'category_id' => 36,
            'name' => 'Manifestation - Just Do It', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Just Do It.png',
            'benefits' => '["Increases focus and calms the mind", "Develops self-discipline and organization", "Decrease feeling of fatigue", "Accomplish things at the right time"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Just Do It', 'filename' => 'Manifestation - Just Do It.mp3'],
        ]);

        $album = Album::create(['order' => 2170, 'category_id' => 36,
        'name' => 'Manifestation - Overcome Adversity', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Overcome Adversity.png',
            'benefits' => '["Helps in developing a strong mind", "Improves mood and increase positive feeling", "Reduces fatigue", "Increase your coping mechanisms"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Overcome Adversity', 'filename' => 'Manifestation - Overcome Adversity.mp3'],
        ]);

        $album = Album::create(['order' => 2180, 'category_id' => 36,
            'name' => 'Manifestation - Overcome Fear', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Overcome Fear.png',
            'benefits' => '["Helps in developing a strong mind", "Improves mood and increase positive feeling", "Overcome fear", "Bring good fortune", "Helps you start achieving for goals"]'
        ]);
        $album->tags()->attach([1, 3, 5]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Overcome Fear', 'filename' => 'Manifestation - Overcome Fear.mp3'],
        ]);

        $album = Album::create(['order' => 2190, 'category_id' => 36,
        'name' => 'Manifestation - Remove Limitations', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Remove Limitations.png',
            'benefits' => '["Decrease feeling of fatigue", "Focuses and relaxes the mind", "Make calm deceisions under pressure", "Quick but calculated decision-making", "Revitalizes the energy"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Remove Limitations', 'filename' => 'Manifestation - Remove Limitations.mp3'],
        ]);

        $album = Album::create(['order' => 2200, 'category_id' => 36,
        'name' => 'Manifestation - Stay Focussed', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Stay Focussed.png',
            'benefits' => '["Increases focus and calms the mind", "Increase awareness", "Improves mood", "Increases happy feeling"]'
        ]);
        $album->tags()->attach([1, 2, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Stay Focussed', 'filename' => 'Manifestation - Stay Focussed.mp3'],
        ]);

        $album = Album::create(['order' => 2210, 'category_id' => 36,
        'name' => 'Manifestation - Surging Inner Strength', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Surging Inner Strength.png',
            'benefits' => '["Increase positive feeling", "May boost self-confidence", "Become more enthusiastic and warm towards tasks or people"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Surging Inner Strength', 'filename' => 'Manifestation - Surging Inner Strength.mp3'],
        ]);

        $album = Album::create(['order' => 2220, 'category_id' => 36,
            'name' => 'Manifestation - Will Power & Purpose', 'audio_folder' => 'Manifesting Plus', 'image' => 'M_Success - Will Power & Purpose.png',
            'benefits' => '["Increase your feeling of motivation", "Increases positive feeling", "Create a strong mindset", "Overcome barrier to change.", "Overcome temptations and get focussed"]'
        ]);
        $album->tags()->attach([1, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Manifestation - Will Power & Purpose', 'filename' => 'Manifestation - Will Power & Purpose.mp3'],
        ]);

        // Psychic Ability

        $album = Album::create(['order' => 2230, 'category_id' => 37,
            'name' => 'Third Eye Opening - Activate Pineal Gland+', 'audio_folder' => 'Psychic Ability', 'image' => '-Third Eye Opening - Activate Pineal Gland+.png',
            'benefits' => '["Awaken pure consciousness of the human mind", "Stimulate the pineal gland", "Open your 3rd eye", "Increase brain creativity", "Develop Intuition, Insight and Imagination"]'
        ]);
        $album->tags()->attach([2, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Third Eye Opening - Activate Pineal Gland+', 'filename' => 'Third Eye Opening - Activate Pineal Gland+.mp3'],
        ]);

        $album = Album::create(['order' => 2240, 'category_id' => 37,
            'name' => 'Psychic Ability Powerful Activator', 'audio_folder' => 'Psychic Ability', 'image' => 'psychicAbility_Psychic Ability Powerful Activator.png',
            'benefits' => '["Activate your psychic ability", "Awaken pure consciousness of the human mind", "Understand subjective consciousness and objective reality", "Expand and develop deeper levels of consciousness"]'
        ]);
        $album->tags()->attach([2, 5, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Psychic Ability Powerful Activator', 'filename' => 'Psychic Ability Powerful Activator.mp3'],
        ]);

        $album = Album::create(['order' => 2250, 'category_id' => 37,
            'name' => 'Psychic Shield', 'audio_folder' => 'Psychic Ability', 'image' => '-Psychic Shield.png',
            'benefits' => '["Create a protective barrier around the aura", "Creates impermeable barrier to other people\'s thoughts and feelings", "Protection against toxic atmospheres"]'
        ]);
        $album->tags()->attach([2, 6, 8]);
        $album->tracks()->createMany([
            ['name' => 'Psychic Shield', 'filename' => 'Psychic Shield.mp3'],
        ]);

        $album = Album::create(['order' => 2260, 'category_id' => 37,
            'name' => 'Mental Telepathy', 'audio_folder' => 'Psychic Ability', 'image' => '-Mental-Telepathy.png',
            'benefits' => '["Rapid increase in thought synchronization between you and other people close to you", "Transferring thoughts from one mind to another", "Improve communication"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mental Telepathy', 'filename' => 'Mental Telepathy.mp3'],
        ]);

        $album = Album::create(['order' => 2270, 'category_id' => 37,
            'name' => 'Lucid Dreaming Inducer', 'audio_folder' => 'Psychic Ability', 'image' => 'psychicAbility_Lucid Dream Inducer.png',
            'benefits' => '["Influence and stimulate the creative part of the brain", "Induce hypnagogic mental phenomena", "Induce lucid dreaming"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Lucid Dreaming Inducer', 'filename' => 'Lucid Dreaming Inducer.mp3'],
        ]);

        $album = Album::create(['order' => 2280, 'category_id' => 37,
            'name' => 'Divine Intuition & Instinct', 'audio_folder' => 'Psychic Ability', 'image' => 'psychicAbility_Divine Intuition & Instinct.png',
            'benefits' => '["Understand vibrations and act on it", "Make decisions more quickly and effectively", "Recognize the nudges of intuition toward that which is best for you"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Divine Intuition & Instinct', 'filename' => 'Divine Intuition & Instinct.mp3'],
        ]);

        $album = Album::create(['order' => 2290, 'category_id' => 37,
            'name' => 'Astral Projection Teleportation', 'audio_folder' => 'Psychic Ability', 'image' => 'psychicAbility_Astral Projection Teleportation.png',
            'benefits' => '["Supports elements of body-mind to behave holistically as one", "Remove interference between separate parts of the self", "Reduces internal noise in body-mind"]'
        ]);
        $album->tags()->attach([2, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Astral Projection Teleportation', 'filename' => 'Astral Projection Teleportation.mp3'],
        ]);

        $album = Album::create(['order' => 2300, 'category_id' => 37,
            'name' => 'Amethyst Crown Chakra Activation', 'audio_folder' => 'Psychic Ability', 'image' => '-Amethyst Crown Chakra Activation.png',
            'benefits' => '["Enhance meditation", "Deepen the experience of astral travel", "Promote clairvoyance", "Develop your intuition or psychic skills"]'
        ]);
        $album->tags()->attach([5, 7, 8]);
        $album->tracks()->createMany([
            ['name' => 'Amethyst Crown Chakra Activation', 'filename' => 'Amethyst Crown Chakra Activation.mp3'],
        ]);

        // Mind Expansion

        $album = Album::create(['order' => 2310, 'category_id' => 38,
            'name' => 'Mind Expansion - Salvia Divinorum Emulator 1', 'audio_folder' => 'Mind Expansion', 'image' => 'Mind Expansion -  Salvia Divinorum Emulator 1.png',
            'benefits' => '["Vastly Increased insight, self-realizations and making discoveries", "Experiencing the improvement of mood", "Great Calmness", "A sense of increased connection with nature, the earth, and the universe", "An increase of self-confidence and self awareness and realization"]'
        ]);
        $album->tags()->attach([4, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mind Expansion - Salvia Divinorum Emulator 1', 'filename' => 'Mind Expansion - Salvia Divinorum Emulator 1.mp3'],
        ]);

        $album = Album::create(['order' => 2320, 'category_id' => 38,
            'name' => 'Mind Expansion - Salvia Divinorum Emulator 2', 'audio_folder' => 'Mind Expansion', 'image' => 'Mind Expansion -  Salvia Divinorum Emulator 2.png',
            'benefits' => '["Profound introspective state of awareness", "Helps with meditation", "Helps with contemplation, and self-reflection", "Provides Relaxation"]'
        ]);
        $album->tags()->attach([4, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mind Expansion - Salvia Divinorum Emulator 2', 'filename' => 'Mind Expansion - Salvia Divinorum Emulator 2.mp3'],
        ]);

        $album = Album::create(['order' => 2330, 'category_id' => 38,
            'name' => 'Mind Expansion - Cannabis / Marijuana Emulator', 'audio_folder' => 'Mind Expansion', 'image' => 'Mind Expansion - Cannabis- Marijuana Emulator.png',
            'benefits' => '["Perception of sensory enhancement", "Increased sense of well-being", "Euphoria", "Alert relaxation", "Reduced anxiety"]'
        ]);
        $album->tags()->attach([3, 4, 5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mind Expansion - Cannabis   Marijuana Emulator', 'filename' => 'Mind Expansion - Cannabis   Marijuana Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 2340, 'category_id' => 38,
            'name' => 'Mind Expansion - LSD Emulator', 'audio_folder' => 'Mind Expansion', 'image' => 'Mind Expansion - LSD Emulator.png',
            'benefits' => '["Sense of reconnection with oneself, others", "Sense of reconnection with the natural world", "Sense of well-being improvement"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mind Expansion - LSD Emulator', 'filename' => 'Mind Expansion - LSD Emulator.mp3'],
        ]);

        $album = Album::create(['order' => 2350, 'category_id' => 38,
            'name' => 'Mind Expansion - Magic Mushroom Emulator', 'audio_folder' => 'Mind Expansion', 'image' => 'Mind Expansion - Magic Mushroom Emulator.png',
            'benefits' => '["Delivers a particular sensorial, experiential \'part\' of the psychedelic trip", "Induce a state of joy, silliness, goofiness, playfulness", "Induce a sense of expanded awareness and overall well being"]'
        ]);
        $album->tags()->attach([5, 8]);
        $album->tracks()->createMany([
            ['name' => 'Mind Expansion - Magic Mushroom Emulator', 'filename' => 'Mind Expansion - Magic Mushroom Emulator.mp3'],
        ]);


        // $album = Album::create(['order' => 100, 'category_id' => 1,
        //     'name' => '', 'audio_folder' => '', 'image' => '',
        //     'benefits' => '["", "", "", "", "", ""]'
        // ]);
        // $album->tags()->attach([]);
        // $album->tracks()->createMany([
        //     ['name' => '', 'filename' => ''],
        //     ['name' => '', 'filename' => ''],
        //     ['name' => '', 'filename' => ''],
        //     ['name' => '', 'filename' => ''],
        // ]);
    }
}
