<?php declare(strict_types=1);

namespace Autoflow\Updater\Tests\SourceRepositoryTypes;

use Autoflow\Updater\Events\UpdateAvailable;
use Autoflow\Updater\Exceptions\InvalidRepositoryException;
use Autoflow\Updater\SourceRepositoryTypes\GithubRepositoryType;
use Autoflow\Updater\SourceRepositoryTypes\GithubRepositoryTypes\GithubBranchType;
use Autoflow\Updater\SourceRepositoryTypes\GithubRepositoryTypes\GithubTagType;
use Autoflow\Updater\Tests\TestCase;
use Autoflow\Updater\Contracts\GithubRepositoryTypeContract;
use Illuminate\Foundation\Testing\Concerns\InteractsWithContainer;
use InvalidArgumentException;
use Exception;

class GithubRepositoryTypeTest extends TestCase
{
    public function testCreateGithubTagTypeInstance()
    {
        /** @var GithubTagType $github */
        $github = (resolve(GithubRepositoryType::class))->create();

        $this->assertInstanceOf(GithubTagType::class, $github);
    }

    public function testCreateGithubBranchTypeInstance()
    {
        config(['self-update.repository_types.github.use_branch' => 'v2']);

        /** @var GithubBranchType $github */
        $github = (resolve(GithubRepositoryType::class))->create();

        $this->assertInstanceOf(GithubBranchType::class, $github);
    }

//    public function testInvalidRepository()
//    {
//        $this->config['repository_vendor'] = '';
//        $this->config['repository_name'] = '';
//
//        $this->withoutExceptionHandling();
//        $this->expectException(InvalidRepositoryException::class);
//
//        /** @var GithubBranchType $github */
//        $github = (new GithubRepositoryType($this->client, $this->config))->create();
//    }
}
