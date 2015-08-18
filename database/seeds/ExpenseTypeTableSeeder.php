<?php
class ExpenseTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_types');

		# Expense_types
	    $expensetype1 = new Expense_type();
		$expensetype1->expensetype = 'Mortgage';
		$expensetype1->expense_type_description = 'Cost associated with the mortgage';
		$expensetype1->save();

		$expensetype2 = new Expense_type();
		$expensetype2->expensetype = 'Insurance';
		$expensetype2->expense_type_description = 'Cost associated with insuring the home and the contents inside';
		$expensetype2->save();

		$expensetype3 = new Expense_type();
		$expensetype3->expensetype = 'Taxes';
		$expensetype3->expense_type_description = 'Cost associated with Property Taxes - both summer and winter';
		$expensetype3->save();

		$expensetype4 = new Expense_type();
		$expensetype4->expensetype = 'Gas';
		$expensetype4->expense_type_description = 'Cost associated with gas utility';
		$expensetype4->save();

		$expensetype5 = new Expense_type();
		$expensetype5->expensetype = 'Electric';
		$expensetype5->expense_type_description = 'Cost associated with electric utility';
		$expensetype5->save();

		$expensetype6 = new Expense_type();
		$expensetype6->expensetype = 'Cable';
		$expensetype6->expense_type_description = 'Cost associated with cable utility';
		$expensetype6->save();
?>