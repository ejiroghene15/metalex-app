<?php

namespace Database\Seeders;

use App\Models\ForumCategory;
use Illuminate\Database\Seeder;

class ForumCategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $category = [
      ['name' => 'Case Management', 'slug' => 'case-management', 'description' => 'Different forums on case management'],
      ['name' => 'Legal Operations', 'slug' => 'legal-operations', 'description' => 'Different forums on legal operations'],
      ['name' => 'Contract Automation', 'slug' => 'contract-automation', 'description' => 'Different forums on contract automation'],
      ['name' => 'Compliance and Risk Management', 'slug' => 'compliance-and-risk-management', 'description' => 'Different forums on compliance and risk management'],
      ['name' => 'Legal Research and AI', 'slug' => 'legal-research-and-ai', 'description' => 'Different forums on legal research and AI'],
    ];

    foreach ($category as $key => $value) {
      ForumCategory::create($value);
    }
  }
}
