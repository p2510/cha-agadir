Schema::create('curriculums', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});


Schema::create('type_formations', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});

Schema::create('languages', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});

Schema::create('rythmes', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});

Schema::create('deroulements', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});

Schema::create('categories', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});

Schema::create('courses', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->foreignId('category_id')->constrained();
$table->dateTime('start')->nullable();
$table->dateTime('end')->nullable();
$table->timestamps();
});

Schema::create('presentations', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->date('start_date');
$table->date('end_date');
$table->string('location');
$table->string('rythme');
$table->string('language');
$table->string('applay');
$table->foreignId('course_id')->constrained();
$table->timestamps();
});

Schema::create('tabs', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->foreignId('course_id')->constrained();
$table->timestamps();
});
}

Schema::create('subtitles', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->text('body');
$table->foreignId('tab_id')->constrained();
$table->timestamps();
});

Schema::create('cycles', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->text('description')->nullable();
$table->foreignId('curriculum_id')->constrained()->nullable();
$table->foreignId('type_formation_id')->constrained()->nullable();
$table->timestamps();
});

Schema::create('filials', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->foreignId('cycle_id')->constrained();
$table->foreignId('deroulement_id')->constrained();
$table->text('description');
$table->integer('duration');
$table->string('localisation');
$table->foreignId('language_id')->constrained();
$table->foreignId('rythme_id')->constrained();            $table->timestamps();
});

Schema::create('blocs', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->foreignId('filial_id')->constrained();
$table->text('description')->nullable();
$table->integer('hoursNumber')->nullable();
$table->timestamps();
});


----------------------------------------------------------------

Schema::create('courses', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->foreignId('category_id')->constrained();
$table->dateTime('start')->nullable();
$table->dateTime('end')->nullable();
$table->timestamps();
});
