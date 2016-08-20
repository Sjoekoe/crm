<?php
namespace Invoices;

use App\Clients\EloquentClient;
use App\Contacts\EloquentContact;
use App\Invoices\Invoice;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentInvoice extends Model implements Invoice
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @return \App\Clients\Client
     */
    public function client()
    {
        return $this->belongsTo(EloquentClient::class, 'client_id', 'id')->first();
    }

    /**
     * @return \App\Contacts\Contact
     */
    public function contact()
    {
        return $this->belongsTo(EloquentContact::class, 'contact_id', 'id')->first();
    }

    /**
     * @return string
     */
    public function number()
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function amount()
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function vat()
    {
        return $this->vat;
    }

    /**
     * @return int
     */
    public function amountWithVat()
    {
        return $this->amount() + $this->vat();
    }

    /**
     * @return int
     */
    public function amountLeft()
    {
        // TODO: Implement amountLeft() method.
    }

    /**
     * @return int
     */
    public function amountOpen()
    {
        // TODO: Implement amountOpen() method.
    }

    /**
     * @return array
     */
    public function timedReminders()
    {
        // TODO: Implement timedReminders() method.
    }

    /**
     * @return string
     */
    public function payPalUrl()
    {
        if ($this->contact()) {
            return "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=info@esign.eu&item_name=Factuur+#$this->nr&invoice=#$this->nr&currency_code=EUR&address1=#{self.client.adr_street}+#{self.client.adr_nr}&city=#{self.client.adr_city}&zip=#{self.client.adr_postcode}&country=#{self.client.country.printable_name}&email=#{self.contact.email}&first_name=#{self.contact.first_name}&last_name=#{self.contact.last_name}&no_shipping=1&lc=BE&cpp_logo_image=http%3A%2F%2Fwww.esign.eu%2Fassets%2Fimages%2Flogo.png&cpp_cart_border_color=ffffff&amount=";
        }
        return "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=info@esign.eu&item_name=Factuur+#{self.nr}&invoice=#{self.nr}&currency_code=EUR&address1=#{self.client.adr_street}+#{self.client.adr_nr}&city=#{self.client.adr_city}&zip=#{self.client.adr_postcode}&country=#{self.client.country.printable_name}&no_shipping=1&lc=BE&cpp_logo_image=http%3A%2F%2Fwww.esign.eu%2Fassets%2Fimages%2Flogo.png&cpp_cart_border_color=ffffff&amount=";
    }

    /**
     * @return int
     */
    public function quarter()
    {
        
    }
}
