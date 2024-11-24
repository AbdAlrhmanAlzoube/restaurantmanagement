<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // الفاتورة مرتبطة بالطلب
            $table->decimal('total_amount', 8, 2);
            $table->decimal('tax_amount', 8, 2)->default(0.00); // ضريبة الفاتورة إن وجدت
            $table->string('status')->default('unpaid'); // حالة الدفع
            $table->string('payment_method')->nullable(); // وسيلة الدفع
            $table->dateTime('issued_at')->useCurrent(); // وقت إصدار الفاتورة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
