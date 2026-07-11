<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property int $active is the course active or inactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Courses whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCourses {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $nationalId
 * @property string $phone
 * @property string $address
 * @property string|null $image
 * @property string $notes
 * @property int $active is the course active or inactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperStudent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $coursesId
 * @property string $start_date
 * @property string $end_date
 * @property numeric $price
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereCoursesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCourses whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTrainingCourses {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $studentId
 * @property int $trainingCoursesId
 * @property string $enrolement_date the day of registration of the student
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereEnrolementDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereTrainingCoursesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCoursesEnrollement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTrainingCoursesEnrollement {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

