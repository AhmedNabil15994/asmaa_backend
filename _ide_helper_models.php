<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Modules\About\Entities{
/**
 * Modules\About\Entities\About
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $desc
 * @property string|null $image
 * @property string $type
 * @property int $status
 * @property string|null $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|About active()
 * @method static \Illuminate\Database\Eloquent\Builder|About anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|About expired()
 * @method static \Illuminate\Database\Eloquent\Builder|About failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|About hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|About isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|About mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About started()
 * @method static \Illuminate\Database\Eloquent\Builder|About successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|About unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|About unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|About visible()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About withDeleted()
 */
	class About extends \Eloquent {}
}

namespace Modules\About\Entities{
/**
 * Modules\About\Entities\AboutType
 *
 * @property string $key
 * @property array|null $title
 * @property array|null $desc
 * @property int|null $order
 * @property int $status
 * @property string|null $image
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\About\Entities\About[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutType whereTitle($value)
 */
	class AboutType extends \Eloquent {}
}

namespace Modules\Apps\Entities{
/**
 * Modules\Apps\Entities\HomepageSection
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $desc
 * @property string|null $image
 * @property string $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $link
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection active()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection expired()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection started()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection visible()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSection withDeleted()
 */
	class HomepageSection extends \Eloquent {}
}

namespace Modules\Apps\Entities{
/**
 * Modules\Apps\Entities\HomepageSectionType
 *
 * @property string $key
 * @property array|null $title
 * @property array|null $desc
 * @property int|null $order
 * @property int $status
 * @property string|null $image
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Apps\Entities\HomepageSection[] $homepageSections
 * @property-read int|null $homepage_sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageSectionType whereTitle($value)
 */
	class HomepageSectionType extends \Eloquent {}
}

namespace Modules\Apps\Entities{
/**
 * Modules\Apps\Entities\Subscribe
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe active()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe started()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribe withDeleted()
 */
	class Subscribe extends \Eloquent {}
}

namespace Modules\Area\Entities{
/**
 * Modules\Area\Entities\Area
 *
 * @property int $id
 * @property array $title
 * @property array|null $slug
 * @property int $status
 * @property int $state_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Modules\Area\Entities\State $state
 * @method static \Illuminate\Database\Eloquent\Builder|Area active()
 * @method static \Illuminate\Database\Eloquent\Builder|Area anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Area expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Area failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Area hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Area isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Area mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Area newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Area onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Area query()
 * @method static \Illuminate\Database\Eloquent\Builder|Area started()
 * @method static \Illuminate\Database\Eloquent\Builder|Area successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Area unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Area unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Area visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Area withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Area withoutTrashed()
 */
	class Area extends \Eloquent {}
}

namespace Modules\Area\Entities{
/**
 * Modules\Area\Entities\City
 *
 * @property int $id
 * @property array $title
 * @property array|null $slug
 * @property int $status
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Area\Entities\Country $country
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Area\Entities\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|City active()
 * @method static \Illuminate\Database\Eloquent\Builder|City anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|City expired()
 * @method static \Illuminate\Database\Eloquent\Builder|City failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|City hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|City isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|City mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|City onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City started()
 * @method static \Illuminate\Database\Eloquent\Builder|City successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|City unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|City unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|City visible()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City withDeleted()
 * @method static \Illuminate\Database\Query\Builder|City withTrashed()
 * @method static \Illuminate\Database\Query\Builder|City withoutTrashed()
 */
	class City extends \Eloquent {}
}

namespace Modules\Area\Entities{
/**
 * Modules\Area\Entities\Country
 *
 * @property int $id
 * @property array $title
 * @property array|null $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Area\Entities\City[] $cities
 * @property-read int|null $cities_count
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Country active()
 * @method static \Illuminate\Database\Eloquent\Builder|Country anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Country expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Country failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Country hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Country isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Country mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country started()
 * @method static \Illuminate\Database\Eloquent\Builder|Country successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Country unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Country unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Country visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Country withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Country withoutTrashed()
 */
	class Country extends \Eloquent {}
}

namespace Modules\Area\Entities{
/**
 * Modules\Area\Entities\State
 *
 * @property int $id
 * @property array $title
 * @property array|null $slug
 * @property int $status
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Area\Entities\Area[] $areas
 * @property-read int|null $areas_count
 * @property-read \Modules\Area\Entities\City $city
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|State active()
 * @method static \Illuminate\Database\Eloquent\Builder|State anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|State expired()
 * @method static \Illuminate\Database\Eloquent\Builder|State failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|State hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|State isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|State mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|State onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State started()
 * @method static \Illuminate\Database\Eloquent\Builder|State successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|State unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|State unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|State visible()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State withDeleted()
 * @method static \Illuminate\Database\Query\Builder|State withTrashed()
 * @method static \Illuminate\Database\Query\Builder|State withoutTrashed()
 */
	class State extends \Eloquent {}
}

namespace Modules\Authorization\Entities{
/**
 * Modules\Authorization\Entities\Permission
 *
 * @property int $id
 * @property string $category
 * @property string $name
 * @property string $guard_name
 * @property array|null $display_name
 * @property string|null $routes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\User\Entities\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereRoutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace Modules\Authorization\Entities{
/**
 * Modules\Authorization\Entities\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property array|null $display_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\User\Entities\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace Modules\Blog\Entities{
/**
 * Modules\Blog\Entities\Blog
 *
 * @property int $id
 * @property array $title
 * @property array $description
 * @property array $slug
 * @property int $status
 * @property string $image
 * @property int $trainer_id
 * @property int $is_news
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $slug_storage
 * @property-read array $translations
 * @property-read \Modules\Trainer\Entities\Trainer $trainer
 * @method static \Illuminate\Database\Eloquent\Builder|Blog active()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog started()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereIsNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Blog withoutTrashed()
 */
	class Blog extends \Eloquent {}
}

namespace Modules\Catalog\Entities{
/**
 * Modules\Catalog\Entities\Client
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $trainer_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Trainer\Entities\Trainer|null $trainer
 * @method static \Illuminate\Database\Eloquent\Builder|Client active()
 * @method static \Illuminate\Database\Eloquent\Builder|Client anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Client expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Client failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Client hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Client isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Client mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client started()
 * @method static \Illuminate\Database\Eloquent\Builder|Client successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Client unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Client unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Client visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client withDeleted()
 */
	class Client extends \Eloquent {}
}

namespace Modules\Catalog\Entities{
/**
 * Modules\Catalog\Entities\Podcast
 *
 * @property int $id
 * @property array $title
 * @property string|null $thumb
 * @property string $video_link
 * @property string|null $video_length
 * @property int $status
 * @property string $loading_status
 * @property string|null $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Course\Entities\ObtainCredential|null $credential
 * @property-read array $translations
 * @property-read mixed $video_status
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast active()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast query()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast started()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereLoadingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereVideoLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast whereVideoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcast withDeleted()
 */
	class Podcast extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Category\Entities{
/**
 * Modules\Category\Entities\Category
 *
 * @property int $id
 * @property array $title
 * @property array $slug
 * @property array $description
 * @property string $image
 * @property int $status
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string $color
 * @property int $sorting
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read mixed $parents
 * @property-read string $slug_storage
 * @property-read array $translations
 * @property-read Category|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Category active()
 * @method static \Illuminate\Database\Eloquent\Builder|Category anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Category expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Category failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Category hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Category isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Category mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category started()
 * @method static \Illuminate\Database\Eloquent\Builder|Category successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Category unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Category unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Category visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\Course
 *
 * @property int $id
 * @property array $title
 * @property array $short_desc
 * @property array $description
 * @property array|null $requirements
 * @property array $slug
 * @property string|null $seo_keywords
 * @property string|null $seo_description
 * @property int $is_published
 * @property int $is_certificated
 * @property string $image
 * @property string|null $class_time
 * @property int|null $period
 * @property int $trainer_id
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes|null $extra_attributes
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $level_id
 * @property string $price
 * @property int $is_live
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseReview[] $activeCourseReviews
 * @property-read int|null $active_course_reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Category\Entities\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseReview[] $courseReviews
 * @property-read int|null $course_reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseDate[] $dates
 * @property-read int|null $dates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseImage[] $gallery
 * @property-read int|null $gallery_count
 * @property-read string $slug_storage
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\LessonContent[] $lessonContents
 * @property-read int|null $lesson_contents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\Lesson[] $lessons
 * @property-read int|null $lessons_count
 * @property-read \Modules\Course\Entities\Level|null $level
 * @property-read \Modules\Course\Entities\Meeting|null $meeting
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\OrderCourse[] $orderCourse
 * @property-read int|null $order_course_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseTarget[] $targets
 * @property-read int|null $targets_count
 * @property-read \Modules\Trainer\Entities\Trainer $trainer
 * @property-read \Modules\Course\Entities\Video|null $video
 * @method static \Illuminate\Database\Eloquent\Builder|Course active()
 * @method static \Illuminate\Database\Eloquent\Builder|Course anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Course expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Course failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Course hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Course isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Course mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Course onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course started()
 * @method static \Illuminate\Database\Eloquent\Builder|Course successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Course unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Course unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Course visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereClassTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereExtraAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereIsCertificated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereIsLive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course withDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Course withExtraAttributes()
 * @method static \Illuminate\Database\Query\Builder|Course withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Course withoutTrashed()
 */
	class Course extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\CourseDate
 *
 * @property int $id
 * @property string $day
 * @property string $duration
 * @property int $course_id
 * @property int $meeting_create
 * @property string $start_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Course\Entities\Course $course
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereMeetingCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseDate whereUpdatedAt($value)
 */
	class CourseDate extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\CourseImage
 *
 * @property int $id
 * @property string $image
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseImage whereUpdatedAt($value)
 */
	class CourseImage extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\CourseReview
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property int $stars
 * @property string|null $desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property int $in_slider
 * @property-read \Modules\Course\Entities\Course $course
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\ReviewQuestionAnswer[] $reviewQuestionAnswer
 * @property-read int|null $review_question_answer_count
 * @property-read \Modules\User\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview active()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview expired()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview started()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview visible()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereInSlider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereStars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseReview withDeleted()
 */
	class CourseReview extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\CourseTarget
 *
 * @property int $id
 * @property array $target
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget active()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget expired()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget started()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget visible()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseTarget withDeleted()
 */
	class CourseTarget extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\Lesson
 *
 * @property int $id
 * @property array $title
 * @property string|null $image
 * @property int $status
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Course\Entities\Course $course
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\LessonContent[] $lessonContents
 * @property-read int|null $lesson_contents_count
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson active()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Lesson onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson started()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Lesson withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Lesson withoutTrashed()
 */
	class Lesson extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\LessonContent
 *
 * @property int $id
 * @property array $title
 * @property int $order
 * @property string $type
 * @property int $lesson_id
 * @property int|null $exam_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Exam\Entities\Exam|null $exam
 * @property-read array $translations
 * @property-read \Modules\Course\Entities\Lesson $lesson
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Modules\Course\Entities\Video|null $video
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent active()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent expired()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent started()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent visible()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonContent withDeleted()
 */
	class LessonContent extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\Level
 *
 * @property int $id
 * @property array $title
 * @property array $short_desc
 * @property array $desc
 * @property int|null $start_exam
 * @property int|null $end_exam
 * @property array|null $requirements
 * @property int $require_start_exam
 * @property int $require_end_exam
 * @property int $paid
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\Course[] $courses
 * @property-read int|null $courses_count
 * @property-read array $translations
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Level active()
 * @method static \Illuminate\Database\Eloquent\Builder|Level anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Level expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Level failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Level hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Level isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Level mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Level onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Level onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Level query()
 * @method static \Illuminate\Database\Eloquent\Builder|Level started()
 * @method static \Illuminate\Database\Eloquent\Builder|Level successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Level unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Level unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Level visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereEndExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereRequireEndExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereRequireStartExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereStartExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Level withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Level withoutTrashed()
 */
	class Level extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\Meeting
 *
 * @property int $id
 * @property string $meetingable_type
 * @property string $meetingable_id
 * @property string $zoom_meeting_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes|null $zoom_response
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $meetingable
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting active()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting started()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereMeetingableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereMeetingableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereZoomMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereZoomResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting withDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting withZoomResponse()
 */
	class Meeting extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\ObtainCredential
 *
 * @property int $id
 * @property string $status
 * @property string $client_payload
 * @property string $api_video_id
 * @property string $created
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Order\Entities\OrderCourse|null $video
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential query()
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereApiVideoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereClientPayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ObtainCredential whereUpdatedAt($value)
 */
	class ObtainCredential extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\ReviewQuestion
 *
 * @property int $id
 * @property array $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion active()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion expired()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion started()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion visible()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestion withDeleted()
 */
	class ReviewQuestion extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\ReviewQuestionAnswer
 *
 * @property int $id
 * @property int $course_review_id
 * @property int $review_question_id
 * @property int $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereCourseReviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereReviewQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewQuestionAnswer whereUpdatedAt($value)
 */
	class ReviewQuestionAnswer extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\UserVideo
 *
 * @property int $id
 * @property int|null $lesson_content_id
 * @property int $user_id
 * @property int $totalPlayed
 * @property int $watched
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $total_played
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereLessonContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereTotalPlayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVideo whereWatched($value)
 */
	class UserVideo extends \Eloquent {}
}

namespace Modules\Course\Entities{
/**
 * Modules\Course\Entities\Video
 *
 * @property int $id
 * @property string|null $thumb
 * @property string $video_link
 * @property string|null $video_length
 * @property int $status
 * @property string $loading_status
 * @property int $videoable_id
 * @property string $videoable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Course\Entities\ObtainCredential|null $credential
 * @property-read mixed $video_minutes
 * @property-read mixed $video_status
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $videoable
 * @method static \Illuminate\Database\Eloquent\Builder|Video active()
 * @method static \Illuminate\Database\Eloquent\Builder|Video anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Video expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Video failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Video hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Video isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Video mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|Video started()
 * @method static \Illuminate\Database\Eloquent\Builder|Video successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Video unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Video unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Video visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereLoadingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereVideoLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereVideoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereVideoableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereVideoableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video withDeleted()
 */
	class Video extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Exam\Entities{
/**
 * Modules\Exam\Entities\Exam
 *
 * @property int $id
 * @property array $title
 * @property int $degree
 * @property int $success_degree
 * @property string|null $duration
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Exam\Entities\Question[] $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Exam active()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Exam onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam started()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereSuccessDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Exam withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Exam withoutTrashed()
 */
	class Exam extends \Eloquent {}
}

namespace Modules\Exam\Entities{
/**
 * Modules\Exam\Entities\Question
 *
 * @property int $id
 * @property array $question
 * @property int $exam_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Exam\Entities\QuestionAnswer[] $answers
 * @property-read int|null $answers_count
 * @property-read array $translations
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Question active()
 * @method static \Illuminate\Database\Eloquent\Builder|Question anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Question expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Question failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Question hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Question isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Question mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Question onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question started()
 * @method static \Illuminate\Database\Eloquent\Builder|Question successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Question unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Question unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Question visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Question withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Question withoutTrashed()
 */
	class Question extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Exam\Entities{
/**
 * Modules\Exam\Entities\QuestionAnswer
 *
 * @property int $id
 * @property array $answer
 * @property int $degree
 * @property int $question_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Modules\Exam\Entities\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer active()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer expired()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|QuestionAnswer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer started()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer visible()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionAnswer withDeleted()
 * @method static \Illuminate\Database\Query\Builder|QuestionAnswer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|QuestionAnswer withoutTrashed()
 */
	class QuestionAnswer extends \Eloquent {}
}

namespace Modules\Exam\Entities{
/**
 * Modules\Exam\Entities\UserExam
 *
 * @property int $id
 * @property int $user_id
 * @property int $exam_id
 * @property int $questions_count
 * @property int $correct_answers_count
 * @property int $exam_result
 * @property int $exam_degree
 * @property int $success_degree
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Exam\Entities\Exam $exam
 * @property-read mixed $exam_is_running
 * @property-read mixed $result_percentage
 * @property-read \Modules\User\Entities\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Exam\Entities\UserExamAnswer[] $userExamAnswers
 * @property-read int|null $user_exam_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereCorrectAnswersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereExamDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereExamResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereQuestionsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereSuccessDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExam whereUserId($value)
 */
	class UserExam extends \Eloquent {}
}

namespace Modules\Exam\Entities{
/**
 * Modules\Exam\Entities\UserExamAnswer
 *
 * @property int $id
 * @property int $user_exam_id
 * @property int|null $question_answer_id
 * @property int $question_id
 * @property int|null $degree
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Exam\Entities\UserExam $userExam
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereQuestionAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExamAnswer whereUserExamId($value)
 */
	class UserExamAnswer extends \Eloquent {}
}

namespace Modules\Faq\Entities{
/**
 * Modules\Faq\Entities\Faq
 *
 * @property int $id
 * @property array $title
 * @property array $desc
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Faq active()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Faq onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq started()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Faq withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Faq withoutTrashed()
 */
	class Faq extends \Eloquent {}
}

namespace Modules\Membership\Entities{
/**
 * Modules\Membership\Entities\Membership
 *
 * @property int $id
 * @property array $title
 * @property int $courses_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCoursesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 */
	class Membership extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Order\Entities{
/**
 * Modules\Order\Entities\Address
 *
 * @property int $id
 * @property string $address
 * @property string $mobile
 * @property string $street
 * @property string $building
 * @property string $city
 * @property int $state_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Modules\Area\Entities\State $state
 * @property-read \Modules\User\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Address active()
 * @method static \Illuminate\Database\Eloquent\Builder|Address anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Address expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Address failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Address hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Address isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Address mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address started()
 * @method static \Illuminate\Database\Eloquent\Builder|Address successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Address unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Address unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Address visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address withDeleted()
 */
	class Address extends \Eloquent {}
}

namespace Modules\Order\Entities{
/**
 * Modules\Order\Entities\Order
 *
 * @property int $id
 * @property int $unread
 * @property int $is_holding
 * @property string $subtotal
 * @property string $discount
 * @property string $total
 * @property string|null $note
 * @property int $user_id
 * @property int $order_status_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\OrderCourse[] $orderCourses
 * @property-read int|null $order_courses_count
 * @property-read \Modules\Order\Entities\OrderStatus $orderStatus
 * @property-read \Modules\User\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Order active()
 * @method static \Illuminate\Database\Eloquent\Builder|Order anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Order expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Order failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Order hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Order isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Order mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order started()
 * @method static \Illuminate\Database\Eloquent\Builder|Order successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Order unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Order unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Order visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsHolding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUnread($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Order withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Order withoutTrashed()
 */
	class Order extends \Eloquent {}
}

namespace Modules\Order\Entities{
/**
 * Modules\Order\Entities\OrderCourse
 *
 * @property int $id
 * @property string $total
 * @property string|null $expired_date
 * @property int|null $period
 * @property int $course_id
 * @property int $order_id
 * @property int $trainer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_watched
 * @property int|null $user_id
 * @property-read \Modules\Course\Entities\Course $course
 * @property-read \Modules\Order\Entities\Order $order
 * @property-read \Modules\User\Entities\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereIsWatched($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderCourse whereUserId($value)
 */
	class OrderCourse extends \Eloquent {}
}

namespace Modules\Order\Entities{
/**
 * Modules\Order\Entities\OrderStatus
 *
 * @property int $id
 * @property array $title
 * @property string $color_label
 * @property int|null $success_status
 * @property int|null $failed_status
 * @property int|null $final_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus active()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus expired()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus started()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus visible()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereColorLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereFailedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereFinalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereSuccessStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus withDeleted()
 */
	class OrderStatus extends \Eloquent {}
}

namespace Modules\Page\Entities{
/**
 * Modules\Page\Entities\Page
 *
 * @property int $id
 * @property array $title
 * @property array $description
 * @property array $slug
 * @property array|null $seo_keywords
 * @property array|null $seo_description
 * @property int $status
 * @property int $type
 * @property int|null $page_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Page active()
 * @method static \Illuminate\Database\Eloquent\Builder|Page anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Page expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Page failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Page hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Page isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Page mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Page onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page started()
 * @method static \Illuminate\Database\Eloquent\Builder|Page successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Page unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Page unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Page visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Page withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Page withoutTrashed()
 */
	class Page extends \Eloquent {}
}

namespace Modules\Service\Entities{
/**
 * Modules\Service\Entities\Service
 *
 * @property int $id
 * @property array $title
 * @property array $description
 * @property array $slug
 * @property int|null $status
 * @property string|null $image
 * @property string|null $color
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Service active()
 * @method static \Illuminate\Database\Eloquent\Builder|Service anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Service expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Service failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Service hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Service isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Service mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service started()
 * @method static \Illuminate\Database\Eloquent\Builder|Service successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Service unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Service unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Service visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Service withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Service withoutTrashed()
 */
	class Service extends \Eloquent {}
}

namespace Modules\Service\Entities{
/**
 * Modules\Service\Entities\ServiceApply
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $desc
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Modules\Service\Entities\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceApply whereUpdatedAt($value)
 */
	class ServiceApply extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Slider\Entities{
/**
 * Modules\Slider\Entities\Slider
 *
 * @property int $id
 * @property array $title
 * @property array|null $description
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property string $type
 * @property string|null $link
 * @property int $status
 * @property int|null $course_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Course\Entities\Course|null $course
 * @property-read array $translations
 * @property-read mixed $url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Slider active()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Query\Builder|Slider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider published()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Slider withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Slider withoutTrashed()
 */
	class Slider extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Testimonial\Entities{
/**
 * Modules\Testimonial\Entities\Testimonial
 *
 * @property int $id
 * @property array $title
 * @property array $desc
 * @property int $status
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial active()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Testimonial onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial started()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Testimonial withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Testimonial withoutTrashed()
 */
	class Testimonial extends \Eloquent {}
}

namespace Modules\Trainer\Entities{
/**
 * Modules\Trainer\Entities\Apply
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $country_id
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Apply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Apply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Apply query()
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Apply whereUpdatedAt($value)
 */
	class Apply extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\Trainer\Entities{
/**
 * Modules\Trainer\Entities\Trainer
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int|null $parent_id
 * @property mixed|null $extra
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Blog[] $blogs
 * @property-read int|null $blogs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Catalog\Entities\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseReview[] $courseReviews
 * @property-read int|null $course_reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\Course[] $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\OrderCourse[] $orderCourse
 * @property-read int|null $order_course_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Modules\Trainer\Entities\TrainerProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Trainer\Entities\TrainerSlider[] $sliders
 * @property-read int|null $sliders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer active()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer expired()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|Trainer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer started()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer withDeleted()
 * @method static \Illuminate\Database\Query\Builder|Trainer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Trainer withoutTrashed()
 */
	class Trainer extends \Eloquent {}
}

namespace Modules\Trainer\Entities{
/**
 * Modules\Trainer\Entities\TrainerProfile
 *
 * @property int $id
 * @property array $about
 * @property array $country
 * @property array $job_title
 * @property int $status
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property int $trainer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile active()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile expired()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile started()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile visible()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile whereYoutube($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerProfile withDeleted()
 */
	class TrainerProfile extends \Eloquent {}
}

namespace Modules\Trainer\Entities{
/**
 * Modules\Trainer\Entities\TrainerSlider
 *
 * @property int $id
 * @property array $description
 * @property int $status
 * @property int $trainer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Modules\Trainer\Entities\Trainer $trainer
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider active()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider expired()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider onlyDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider started()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider visible()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainerSlider withDeleted()
 */
	class TrainerSlider extends \Eloquent {}
}

namespace Modules\Transaction\Entities{
/**
 * Modules\Transaction\Entities\Transaction
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 */
	class Transaction extends \Eloquent {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\Message
 *
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string|null $message
 * @property int $thread_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Modules\User\Entities\User $receiver
 * @property-read \Modules\User\Entities\User $sender
 * @property-read \Modules\User\Entities\Thread $thread
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereThreadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\Thread
 *
 * @property int $id
 * @property int|null $first_side
 * @property int|null $second_side
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\User\Entities\User|null $firstSide
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\User\Entities\Message[] $messages
 * @property-read int|null $messages_count
 * @property-read \Modules\User\Entities\User|null $secondSide
 * @method static \Illuminate\Database\Eloquent\Builder|Thread newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thread newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thread query()
 * @method static \Illuminate\Database\Eloquent\Builder|Thread whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thread whereFirstSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thread whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thread whereSecondSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thread whereUpdatedAt($value)
 */
	class Thread extends \Eloquent {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int|null $parent_id
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes|null $extra
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Exam\Entities\UserExam[] $UserExams
 * @property-read int|null $user_exams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\User\Entities\UserAnswer[] $answers
 * @property-read int|null $answers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\CourseReview[] $courseReview
 * @property-read int|null $course_review_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\OrderCourse[] $orderCourses
 * @property-read int|null $order_courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Order\Entities\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Modules\User\Entities\UserProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\User\Entities\Message[] $receiverMessages
 * @property-read int|null $receiver_messages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Course\Entities\UserVideo[] $userVideos
 * @property-read int|null $user_videos_count
 * @method static \Illuminate\Database\Eloquent\Builder|User active()
 * @method static \Illuminate\Database\Eloquent\Builder|User anyTranslation($column, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|User expired()
 * @method static \Illuminate\Database\Eloquent\Builder|User failedOrderStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|User hidden()
 * @method static \Illuminate\Database\Eloquent\Builder|User isTrused()
 * @method static \Illuminate\Database\Eloquent\Builder|User mainCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyDeleted()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User started()
 * @method static \Illuminate\Database\Eloquent\Builder|User successPayment()
 * @method static \Illuminate\Database\Eloquent\Builder|User unActive()
 * @method static \Illuminate\Database\Eloquent\Builder|User unexpired()
 * @method static \Illuminate\Database\Eloquent\Builder|User visible()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withDeleted()
 * @method static \Illuminate\Database\Eloquent\Builder|User withExtra()
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\UserAnswer
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAnswer query()
 */
	class UserAnswer extends \Eloquent {}
}

namespace Modules\User\Entities{
/**
 * Modules\User\Entities\UserProfile
 *
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property string $birthday
 * @property string|null $age
 * @property string $gender
 * @property string $nationality
 * @property string|null $street
 * @property string|null $address
 * @property string|null $note
 * @property int $is_reviewed
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\User\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereIsReviewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUserId($value)
 */
	class UserProfile extends \Eloquent {}
}

