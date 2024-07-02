PGDMP      4                |         
   ihmcare_db    16.3    16.3 �   �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16418 
   ihmcare_db    DATABASE     �   CREATE DATABASE ihmcare_db WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE ihmcare_db;
                postgres    false            �           1255    16437    update_last_update_column()    FUNCTION     �   CREATE FUNCTION public.update_last_update_column() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
BEGIN
  NEW.last_update = CURRENT_TIMESTAMP;
  RETURN NEW;
END;
$$;
 2   DROP FUNCTION public.update_last_update_column();
       public          postgres    false            �           1255    16470    update_updated_at_column()    FUNCTION     �   CREATE FUNCTION public.update_updated_at_column() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
BEGIN
  NEW.updated_at = CURRENT_TIMESTAMP;
  RETURN NEW;
END;
$$;
 1   DROP FUNCTION public.update_updated_at_column();
       public          postgres    false            �            1259    16428    accountspayable    TABLE     �  CREATE TABLE public.accountspayable (
    id integer NOT NULL,
    payment_id character varying(100) NOT NULL,
    vendor_name character varying(100) NOT NULL,
    invoice_number character varying(50) NOT NULL,
    invoice_date date NOT NULL,
    due_date date NOT NULL,
    amount_due numeric(10,2) NOT NULL,
    payment_status character varying(20) NOT NULL,
    payment_date date,
    last_update timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT accountspayable_payment_status_check CHECK (((payment_status)::text = ANY ((ARRAY['Paid'::character varying, 'Unpaid'::character varying, 'Partially Paid'::character varying])::text[])))
);
 #   DROP TABLE public.accountspayable;
       public         heap    postgres    false            �            1259    16427    accountspayable_id_seq    SEQUENCE     �   CREATE SEQUENCE public.accountspayable_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.accountspayable_id_seq;
       public          postgres    false    216            �           0    0    accountspayable_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.accountspayable_id_seq OWNED BY public.accountspayable.id;
          public          postgres    false    215            �            1259    16439    accountsreceivable    TABLE     �  CREATE TABLE public.accountsreceivable (
    id integer NOT NULL,
    trans_date date,
    trans_time time without time zone NOT NULL,
    service character varying(200) NOT NULL,
    patient_id character varying(100) NOT NULL,
    transaction_id character varying(100) NOT NULL,
    amount numeric(64,2) NOT NULL,
    amount_owned numeric(64,2) NOT NULL,
    amount_paid numeric(64,2) NOT NULL,
    payment_status character varying(20) NOT NULL,
    payment_date date,
    authourizer character varying(100) NOT NULL,
    pay_later_narration character varying(100) NOT NULL,
    patient_type character varying(100) NOT NULL,
    posted_by character varying(100) NOT NULL,
    last_update timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT accountsreceivable_payment_status_check CHECK (((payment_status)::text = ANY ((ARRAY['Paid'::character varying, 'Unpaid'::character varying, 'Partially Paid'::character varying])::text[])))
);
 &   DROP TABLE public.accountsreceivable;
       public         heap    postgres    false            �            1259    16438    accountsreceivable_id_seq    SEQUENCE     �   CREATE SEQUENCE public.accountsreceivable_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.accountsreceivable_id_seq;
       public          postgres    false    218            �           0    0    accountsreceivable_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.accountsreceivable_id_seq OWNED BY public.accountsreceivable.id;
          public          postgres    false    217            �            1259    16451    ambulance_booking    TABLE       CREATE TABLE public.ambulance_booking (
    id integer NOT NULL,
    booking_id character varying(100) NOT NULL,
    service_id character varying(100) DEFAULT NULL::character varying,
    state character varying(100) NOT NULL,
    place character varying(100) NOT NULL,
    amount numeric(64,2) NOT NULL,
    vehicle_type character varying(100) DEFAULT NULL::character varying,
    status character varying(100) DEFAULT 'Ongoing'::character varying NOT NULL,
    booking_date character varying(100) DEFAULT NULL::character varying,
    booked_start character varying(100) DEFAULT NULL::character varying,
    booked_end character varying(100) DEFAULT NULL::character varying,
    booked_by character varying(100) DEFAULT NULL::character varying,
    added_by character varying(100) DEFAULT NULL::character varying,
    added_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    book_updated_by character varying(100) DEFAULT NULL::character varying,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 %   DROP TABLE public.ambulance_booking;
       public         heap    postgres    false            �            1259    16450    ambulance_booking_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ambulance_booking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.ambulance_booking_id_seq;
       public          postgres    false    220            �           0    0    ambulance_booking_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.ambulance_booking_id_seq OWNED BY public.ambulance_booking.id;
          public          postgres    false    219            �            1259    16473    ambulance_service    TABLE     �  CREATE TABLE public.ambulance_service (
    id integer NOT NULL,
    service_id character varying(100) NOT NULL,
    state character varying(100) NOT NULL,
    place character varying(100) NOT NULL,
    sienna_amount numeric(64,2) NOT NULL,
    jeep_amount numeric(64,2) NOT NULL,
    updated_by character varying(100) NOT NULL,
    created_at date NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 %   DROP TABLE public.ambulance_service;
       public         heap    postgres    false            �            1259    16472    ambulance_service_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ambulance_service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.ambulance_service_id_seq;
       public          postgres    false    222            �           0    0    ambulance_service_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.ambulance_service_id_seq OWNED BY public.ambulance_service.id;
          public          postgres    false    221            �            1259    16482    ambulance_table    TABLE     �  CREATE TABLE public.ambulance_table (
    id integer NOT NULL,
    ambulance_name character varying(100) NOT NULL,
    ambulance_id character varying(100) NOT NULL,
    added_by character varying(100) NOT NULL,
    added_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_by character varying(100) NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 #   DROP TABLE public.ambulance_table;
       public         heap    postgres    false            �            1259    16481    ambulance_table_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ambulance_table_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ambulance_table_id_seq;
       public          postgres    false    224            �           0    0    ambulance_table_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ambulance_table_id_seq OWNED BY public.ambulance_table.id;
          public          postgres    false    223            �            1259    16492    appointment    TABLE     �  CREATE TABLE public.appointment (
    id integer NOT NULL,
    appointmentid character varying(100),
    patientid character varying(100) NOT NULL,
    doctorid character varying(100) NOT NULL,
    detials character varying(255),
    category character varying(100),
    unit character varying(255),
    appointmentdate date NOT NULL,
    starttime time without time zone NOT NULL,
    endtime time without time zone NOT NULL,
    status character varying(20) NOT NULL,
    notes text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    posted_by character varying(255),
    post_from character varying(100),
    visit_type character varying(255),
    CONSTRAINT appointment_status_check CHECK (((status)::text = ANY ((ARRAY['Scheduled'::character varying, 'Completed'::character varying, 'Canceled'::character varying, 'Missed'::character varying])::text[])))
);
    DROP TABLE public.appointment;
       public         heap    postgres    false            �            1259    16491    appointment_id_seq    SEQUENCE     �   CREATE SEQUENCE public.appointment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.appointment_id_seq;
       public          postgres    false    226            �           0    0    appointment_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.appointment_id_seq OWNED BY public.appointment.id;
          public          postgres    false    225            �            1259    16505 
   attendance    TABLE     �   CREATE TABLE public.attendance (
    id integer NOT NULL,
    staff_id character varying(100),
    "Date" date,
    clockintime time without time zone,
    clockouttime time without time zone,
    hoursworked numeric(5,2)
);
    DROP TABLE public.attendance;
       public         heap    postgres    false            �            1259    16504    attendance_id_seq    SEQUENCE     �   CREATE SEQUENCE public.attendance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.attendance_id_seq;
       public          postgres    false    228            �           0    0    attendance_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.attendance_id_seq OWNED BY public.attendance.id;
          public          postgres    false    227            �            1259    16513    bed    TABLE     K  CREATE TABLE public.bed (
    id integer NOT NULL,
    "BedID" character varying(10) NOT NULL,
    "Category" character varying(10),
    "Ward" character varying(50),
    "BedName" character varying(50),
    "BedNumber" character varying(10) NOT NULL,
    "BedAmount" numeric(10,2),
    "Status" character varying(100) NOT NULL
);
    DROP TABLE public.bed;
       public         heap    postgres    false            �            1259    16512 
   bed_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bed_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.bed_id_seq;
       public          postgres    false    230            �           0    0 
   bed_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.bed_id_seq OWNED BY public.bed.id;
          public          postgres    false    229            �            1259    16520    bedcategory    TABLE     �   CREATE TABLE public.bedcategory (
    id integer NOT NULL,
    "CategoryName" character varying(100) NOT NULL,
    amount numeric(64,2) NOT NULL,
    "Description" text
);
    DROP TABLE public.bedcategory;
       public         heap    postgres    false            �            1259    16519    bedcategory_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bedcategory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.bedcategory_id_seq;
       public          postgres    false    232            �           0    0    bedcategory_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.bedcategory_id_seq OWNED BY public.bedcategory.id;
          public          postgres    false    231            �            1259    16548 	   bill_item    TABLE     -  CREATE TABLE public.bill_item (
    item_id integer NOT NULL,
    item_name character varying(255) NOT NULL,
    description text,
    bill_id character varying(255) NOT NULL,
    bill_date date,
    qty character varying(255) NOT NULL,
    unit_price numeric(10,2),
    total_amount numeric(10,2)
);
    DROP TABLE public.bill_item;
       public         heap    postgres    false            �            1259    16547    bill_item_item_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bill_item_item_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.bill_item_item_id_seq;
       public          postgres    false    238            �           0    0    bill_item_item_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bill_item_item_id_seq OWNED BY public.bill_item.item_id;
          public          postgres    false    237            �            1259    16557    bill_log    TABLE     .  CREATE TABLE public.bill_log (
    id integer NOT NULL,
    reference_id character varying(255) NOT NULL,
    bill_description character varying(255) NOT NULL,
    quantity numeric(10,2) NOT NULL,
    unit_price numeric(10,2) NOT NULL,
    total numeric(10,2) NOT NULL,
    added_date date NOT NULL
);
    DROP TABLE public.bill_log;
       public         heap    postgres    false            �            1259    16556    bill_log_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bill_log_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.bill_log_id_seq;
       public          postgres    false    240            �           0    0    bill_log_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.bill_log_id_seq OWNED BY public.bill_log.id;
          public          postgres    false    239            �            1259    16566    bill_payment_log    TABLE     8  CREATE TABLE public.bill_payment_log (
    id integer NOT NULL,
    reference_id character varying(255) NOT NULL,
    bill_description character varying(255) NOT NULL,
    quantity numeric(10,2) NOT NULL,
    unit_price numeric(10,2) NOT NULL,
    total numeric(10,2) NOT NULL,
    payment_date date NOT NULL
);
 $   DROP TABLE public.bill_payment_log;
       public         heap    postgres    false            �            1259    16565    bill_payment_log_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bill_payment_log_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.bill_payment_log_id_seq;
       public          postgres    false    242            �           0    0    bill_payment_log_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.bill_payment_log_id_seq OWNED BY public.bill_payment_log.id;
          public          postgres    false    241            �            1259    16529    billing    TABLE     =  CREATE TABLE public.billing (
    id integer NOT NULL,
    billing_id character varying(100) NOT NULL,
    patient_id character varying(100) NOT NULL,
    billing_date date NOT NULL,
    billing_amount numeric(10,2) NOT NULL,
    paid_amount numeric(64,2) NOT NULL,
    billing_status character varying(20) NOT NULL,
    due_date character varying(50),
    payment_date date,
    CONSTRAINT billing_billing_status_check CHECK (((billing_status)::text = ANY ((ARRAY['Paid'::character varying, 'Unpaid'::character varying, 'Partially Paid'::character varying])::text[])))
);
    DROP TABLE public.billing;
       public         heap    postgres    false            �            1259    16528    billing_id_seq    SEQUENCE     �   CREATE SEQUENCE public.billing_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.billing_id_seq;
       public          postgres    false    234            �           0    0    billing_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.billing_id_seq OWNED BY public.billing.id;
          public          postgres    false    233            �            1259    16538    billing_information    TABLE     #  CREATE TABLE public.billing_information (
    id integer NOT NULL,
    billingid character varying(100),
    visitid character varying(100) NOT NULL,
    billingdate date NOT NULL,
    billedamount numeric(10,2) NOT NULL,
    paymentstatus character varying(20) NOT NULL,
    paymentdate date,
    notes text,
    CONSTRAINT billing_information_paymentstatus_check CHECK (((paymentstatus)::text = ANY ((ARRAY['Unpaid'::character varying, 'Paid'::character varying, 'Partially Paid'::character varying, 'Overdue'::character varying])::text[])))
);
 '   DROP TABLE public.billing_information;
       public         heap    postgres    false            �            1259    16537    billing_information_id_seq    SEQUENCE     �   CREATE SEQUENCE public.billing_information_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.billing_information_id_seq;
       public          postgres    false    236            �           0    0    billing_information_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.billing_information_id_seq OWNED BY public.billing_information.id;
          public          postgres    false    235            �            1259    16575    blood_collection_table    TABLE     p  CREATE TABLE public.blood_collection_table (
    id integer NOT NULL,
    collection_id character varying(255) NOT NULL,
    donor_id character varying(255) NOT NULL,
    collection_date date NOT NULL,
    collection_volume character varying(255) NOT NULL,
    blood_component_types character varying(255) NOT NULL,
    performed_by character varying(255) NOT NULL
);
 *   DROP TABLE public.blood_collection_table;
       public         heap    postgres    false            �            1259    16574    blood_collection_table_id_seq    SEQUENCE     �   CREATE SEQUENCE public.blood_collection_table_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.blood_collection_table_id_seq;
       public          postgres    false    244            �           0    0    blood_collection_table_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.blood_collection_table_id_seq OWNED BY public.blood_collection_table.id;
          public          postgres    false    243            �            1259    16584    blood_inventory_table    TABLE     �  CREATE TABLE public.blood_inventory_table (
    id integer NOT NULL,
    inventory_id character varying(255) NOT NULL,
    blood_type character varying(255) NOT NULL,
    component_type character varying(255) NOT NULL,
    expiration_date date NOT NULL,
    quantity numeric(10,2) NOT NULL,
    performed_by character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 )   DROP TABLE public.blood_inventory_table;
       public         heap    postgres    false            �            1259    16583    blood_inventory_table_id_seq    SEQUENCE     �   CREATE SEQUENCE public.blood_inventory_table_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.blood_inventory_table_id_seq;
       public          postgres    false    246            �           0    0    blood_inventory_table_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.blood_inventory_table_id_seq OWNED BY public.blood_inventory_table.id;
          public          postgres    false    245            �            1259    16595    branch    TABLE     �  CREATE TABLE public.branch (
    id integer NOT NULL,
    branchname character varying(100) NOT NULL,
    branchprefix character varying(10) NOT NULL,
    company character varying(100) NOT NULL,
    address text,
    added_by character varying(100),
    email character varying(100),
    phone character varying(20),
    contactperson character varying(100),
    status character varying(10) NOT NULL,
    createddate timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    lastupdated timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT branch_status_check CHECK (((status)::text = ANY ((ARRAY['Active'::character varying, 'Inactive'::character varying])::text[])))
);
    DROP TABLE public.branch;
       public         heap    postgres    false            �            1259    16594    branch_id_seq    SEQUENCE     �   CREATE SEQUENCE public.branch_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.branch_id_seq;
       public          postgres    false    248            �           0    0    branch_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.branch_id_seq OWNED BY public.branch.id;
          public          postgres    false    247            2           1259    16969    cache    TABLE     �   CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache;
       public         heap    postgres    false            3           1259    16976    cache_locks    TABLE     �   CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache_locks;
       public         heap    postgres    false            �            1259    16612    case_log    TABLE     �  CREATE TABLE public.case_log (
    id integer NOT NULL,
    case_id character varying(255) NOT NULL,
    case_name character varying(255) NOT NULL,
    status character varying(255) NOT NULL,
    datex character varying(255) NOT NULL,
    timex character varying(255) NOT NULL,
    sex character varying(255) NOT NULL,
    entered_by character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.case_log;
       public         heap    postgres    false            �            1259    16611    case_log_id_seq    SEQUENCE     �   CREATE SEQUENCE public.case_log_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.case_log_id_seq;
       public          postgres    false    250            �           0    0    case_log_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.case_log_id_seq OWNED BY public.case_log.id;
          public          postgres    false    249            �            1259    16622    cashiersales    TABLE     d  CREATE TABLE public.cashiersales (
    id integer NOT NULL,
    saleid character varying(100),
    cashierid character varying(100),
    transactionid character varying(100),
    saledatetime timestamp without time zone,
    customername character varying(100),
    paymentmethod character varying(50),
    totalamount numeric(10,2),
    itemssold text
);
     DROP TABLE public.cashiersales;
       public         heap    postgres    false            �            1259    16621    cashiersales_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cashiersales_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.cashiersales_id_seq;
       public          postgres    false    252            �           0    0    cashiersales_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.cashiersales_id_seq OWNED BY public.cashiersales.id;
          public          postgres    false    251            �            1259    16631    cashiershift    TABLE     r  CREATE TABLE public.cashiershift (
    id integer NOT NULL,
    shiftid character varying(100),
    cashierid character varying(100),
    registerid character varying(100),
    shiftstartdatetime timestamp without time zone,
    shiftenddatetime timestamp without time zone,
    totalsales numeric(10,2),
    totalcashin numeric(10,2),
    totalcashout numeric(10,2)
);
     DROP TABLE public.cashiershift;
       public         heap    postgres    false            �            1259    16630    cashiershift_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cashiershift_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.cashiershift_id_seq;
       public          postgres    false    254            �           0    0    cashiershift_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.cashiershift_id_seq OWNED BY public.cashiershift.id;
          public          postgres    false    253                        1259    16638    cashiertransactionslog    TABLE       CREATE TABLE public.cashiertransactionslog (
    id integer NOT NULL,
    logid character varying(50),
    cashierid character varying(50),
    transactiondatetime timestamp without time zone,
    transactiontype character varying(50),
    description text
);
 *   DROP TABLE public.cashiertransactionslog;
       public         heap    postgres    false            �            1259    16637    cashiertransactionslog_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cashiertransactionslog_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.cashiertransactionslog_id_seq;
       public          postgres    false    256            �           0    0    cashiertransactionslog_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.cashiertransactionslog_id_seq OWNED BY public.cashiertransactionslog.id;
          public          postgres    false    255                       1259    16647    cashregister    TABLE     �  CREATE TABLE public.cashregister (
    id integer NOT NULL,
    registerid character varying(100),
    cashierid character varying(100),
    openingdatetime timestamp without time zone,
    closingdatetime timestamp without time zone,
    openingbalance numeric(10,2),
    closingbalance numeric(10,2),
    status character varying(10),
    CONSTRAINT cashregister_status_check CHECK (((status)::text = ANY ((ARRAY['Open'::character varying, 'Closed'::character varying])::text[])))
);
     DROP TABLE public.cashregister;
       public         heap    postgres    false                       1259    16646    cashregister_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cashregister_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.cashregister_id_seq;
       public          postgres    false    258            �           0    0    cashregister_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.cashregister_id_seq OWNED BY public.cashregister.id;
          public          postgres    false    257                       1259    16656    cashtransactions    TABLE     $  CREATE TABLE public.cashtransactions (
    id integer NOT NULL,
    transactionid character varying(100),
    registerid character varying(100),
    transactiondatetime timestamp without time zone,
    transactiontype character varying(10),
    amount numeric(10,2),
    description text,
    CONSTRAINT cashtransactions_transactiontype_check CHECK (((transactiontype)::text = ANY ((ARRAY['CashIn'::character varying, 'CashOut'::character varying, 'Sales'::character varying, 'Refund'::character varying, 'Other'::character varying])::text[])))
);
 $   DROP TABLE public.cashtransactions;
       public         heap    postgres    false                       1259    16655    cashtransactions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cashtransactions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.cashtransactions_id_seq;
       public          postgres    false    260            �           0    0    cashtransactions_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.cashtransactions_id_seq OWNED BY public.cashtransactions.id;
          public          postgres    false    259                       1259    16666    centralstore    TABLE     P  CREATE TABLE public.centralstore (
    id integer NOT NULL,
    itemid character varying(255),
    itemname character varying(255),
    itemdescription character varying(255),
    unitcost numeric(10,2),
    unitsales numeric(10,2),
    itemquantity numeric(12,2) NOT NULL,
    itemexpirydate date,
    status character varying(255)
);
     DROP TABLE public.centralstore;
       public         heap    postgres    false                       1259    16665    centralstore_id_seq    SEQUENCE     �   CREATE SEQUENCE public.centralstore_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.centralstore_id_seq;
       public          postgres    false    262            �           0    0    centralstore_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.centralstore_id_seq OWNED BY public.centralstore.id;
          public          postgres    false    261                       1259    16675    chart_of_account    TABLE     �   CREATE TABLE public.chart_of_account (
    id integer NOT NULL,
    account_name character varying(100) NOT NULL,
    account_type character varying(100) NOT NULL,
    added_by character varying(100)
);
 $   DROP TABLE public.chart_of_account;
       public         heap    postgres    false                       1259    16674    chart_of_account_id_seq    SEQUENCE     �   CREATE SEQUENCE public.chart_of_account_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.chart_of_account_id_seq;
       public          postgres    false    264            �           0    0    chart_of_account_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.chart_of_account_id_seq OWNED BY public.chart_of_account.id;
          public          postgres    false    263            
           1259    16682    confirmation_appraisal    TABLE     �  CREATE TABLE public.confirmation_appraisal (
    confirmationappraisalid integer NOT NULL,
    employeeid integer NOT NULL,
    appraisaldate date NOT NULL,
    confirmationstatus character varying(20) NOT NULL,
    appraisalresult text,
    comments text,
    initiator character varying(50),
    initiationdate date,
    selfassessment text,
    supervisorappraisal text,
    hodrecommendation character varying(50),
    status character varying(50),
    approvallevel integer,
    approvaldate date,
    CONSTRAINT confirmation_appraisal_confirmationstatus_check CHECK (((confirmationstatus)::text = ANY ((ARRAY['Pending'::character varying, 'Confirmed'::character varying, 'Not Confirmed'::character varying])::text[])))
);
 *   DROP TABLE public.confirmation_appraisal;
       public         heap    postgres    false            	           1259    16681 2   confirmation_appraisal_confirmationappraisalid_seq    SEQUENCE     �   CREATE SEQUENCE public.confirmation_appraisal_confirmationappraisalid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 I   DROP SEQUENCE public.confirmation_appraisal_confirmationappraisalid_seq;
       public          postgres    false    266            �           0    0 2   confirmation_appraisal_confirmationappraisalid_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.confirmation_appraisal_confirmationappraisalid_seq OWNED BY public.confirmation_appraisal.confirmationappraisalid;
          public          postgres    false    265                       1259    16692    corporate_insurance    TABLE     q  CREATE TABLE public.corporate_insurance (
    id integer NOT NULL,
    insuranceid character varying(100) NOT NULL,
    companyname character varying(100) NOT NULL,
    address character varying(100) NOT NULL,
    phone character varying(20) NOT NULL,
    contactperson character varying(100),
    contactemail character varying(100),
    corporatetype character varying(50),
    status character varying(20) NOT NULL,
    added_by character varying(100) NOT NULL,
    CONSTRAINT corporate_insurance_status_check CHECK (((status)::text = ANY ((ARRAY['Active'::character varying, 'Inactive'::character varying])::text[])))
);
 '   DROP TABLE public.corporate_insurance;
       public         heap    postgres    false                       1259    16691    corporate_insurance_id_seq    SEQUENCE     �   CREATE SEQUENCE public.corporate_insurance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.corporate_insurance_id_seq;
       public          postgres    false    268            �           0    0    corporate_insurance_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.corporate_insurance_id_seq OWNED BY public.corporate_insurance.id;
          public          postgres    false    267                       1259    16702    corporate_insurance_specialty    TABLE     �  CREATE TABLE public.corporate_insurance_specialty (
    id integer NOT NULL,
    specialtyid character varying(100) NOT NULL,
    corporateinsurancename character varying(100) NOT NULL,
    specialty character varying(50) NOT NULL,
    department character varying(50) NOT NULL,
    designation character varying(50) NOT NULL,
    consultationamountfirstvisit numeric(10,2) NOT NULL,
    companytype character varying(50) NOT NULL,
    consultationamountrevisit numeric(10,2) NOT NULL,
    ipconsultationamountfirstvisit numeric(10,2) NOT NULL,
    ipconsultationamountrevisit numeric(10,2) NOT NULL,
    consultationperiod character varying(50) NOT NULL,
    branch character varying(100),
    description text,
    status character varying(20) NOT NULL,
    CONSTRAINT corporate_insurance_specialty_status_check CHECK (((status)::text = ANY ((ARRAY['Active'::character varying, 'Inactive'::character varying])::text[])))
);
 1   DROP TABLE public.corporate_insurance_specialty;
       public         heap    postgres    false                       1259    16701 $   corporate_insurance_specialty_id_seq    SEQUENCE     �   CREATE SEQUENCE public.corporate_insurance_specialty_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.corporate_insurance_specialty_id_seq;
       public          postgres    false    270            �           0    0 $   corporate_insurance_specialty_id_seq    SEQUENCE OWNED BY     m   ALTER SEQUENCE public.corporate_insurance_specialty_id_seq OWNED BY public.corporate_insurance_specialty.id;
          public          postgres    false    269                       1259    16712    corpsedeposit    TABLE     "  CREATE TABLE public.corpsedeposit (
    id integer NOT NULL,
    case_id character varying(255) NOT NULL,
    datex character varying(255),
    timex character varying(255),
    name_of_corpse character varying(255),
    age character varying(255),
    sex character varying(255),
    name_of_village character varying(255),
    religion character varying(255),
    dateofdeath date,
    causeofdeath text,
    placeofdeath character varying(255),
    complexion character varying(255),
    depositor_name character varying(255),
    relationship character varying(255),
    address text,
    phone character varying(255),
    tally_number character varying(255),
    color character varying(255),
    deposit_amount numeric(64,2) NOT NULL,
    mortician_name character varying(255),
    cashier_signature character varying(255),
    entered_by character varying(255),
    additionalnotes text,
    status character varying(255) DEFAULT 'ongoing'::character varying NOT NULL,
    contract_form_image character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_by character varying(255),
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    update_today character varying(255) NOT NULL,
    storage_type character varying(255)
);
 !   DROP TABLE public.corpsedeposit;
       public         heap    postgres    false                       1259    16711    corpsedeposit_id_seq    SEQUENCE     �   CREATE SEQUENCE public.corpsedeposit_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.corpsedeposit_id_seq;
       public          postgres    false    272            �           0    0    corpsedeposit_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.corpsedeposit_id_seq OWNED BY public.corpsedeposit.id;
          public          postgres    false    271                       1259    16724    departmentgroup    TABLE     �   CREATE TABLE public.departmentgroup (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    type_id character varying(50) NOT NULL
);
 #   DROP TABLE public.departmentgroup;
       public         heap    postgres    false                       1259    16723    departmentgroup_id_seq    SEQUENCE     �   CREATE SEQUENCE public.departmentgroup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.departmentgroup_id_seq;
       public          postgres    false    274            �           0    0    departmentgroup_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.departmentgroup_id_seq OWNED BY public.departmentgroup.id;
          public          postgres    false    273                       1259    16731    departmentgrouptype    TABLE     o   CREATE TABLE public.departmentgrouptype (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);
 '   DROP TABLE public.departmentgrouptype;
       public         heap    postgres    false                       1259    16730    departmentgrouptype_id_seq    SEQUENCE     �   CREATE SEQUENCE public.departmentgrouptype_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.departmentgrouptype_id_seq;
       public          postgres    false    276            �           0    0    departmentgrouptype_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.departmentgrouptype_id_seq OWNED BY public.departmentgrouptype.id;
          public          postgres    false    275                       1259    16738    designation    TABLE       CREATE TABLE public.designation (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.designation;
       public         heap    postgres    false                       1259    16737    designation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.designation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.designation_id_seq;
       public          postgres    false    278            �           0    0    designation_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.designation_id_seq OWNED BY public.designation.id;
          public          postgres    false    277                       1259    16766 	   diet_plan    TABLE     �  CREATE TABLE public.diet_plan (
    dietplanid integer NOT NULL,
    patientid integer,
    dieticianid integer,
    start_date date,
    end_date date,
    status character varying(20),
    instructions text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT diet_plan_status_check CHECK (((status)::text = ANY ((ARRAY['Active'::character varying, 'Inactive'::character varying])::text[])))
);
    DROP TABLE public.diet_plan;
       public         heap    postgres    false                       1259    16765    diet_plan_dietplanid_seq    SEQUENCE     �   CREATE SEQUENCE public.diet_plan_dietplanid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.diet_plan_dietplanid_seq;
       public          postgres    false    284            �           0    0    diet_plan_dietplanid_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.diet_plan_dietplanid_seq OWNED BY public.diet_plan.dietplanid;
          public          postgres    false    283                       1259    16747    dietary_assessment    TABLE     ~  CREATE TABLE public.dietary_assessment (
    dietaryassessmentid integer NOT NULL,
    patientid integer,
    "Date" date,
    nutritional_assessment_scores jsonb,
    dietician_comments text,
    CONSTRAINT dietary_assessment_nutritional_assessment_scores_check CHECK (((jsonb_typeof(nutritional_assessment_scores) = 'object'::text) OR (nutritional_assessment_scores IS NULL)))
);
 &   DROP TABLE public.dietary_assessment;
       public         heap    postgres    false                       1259    16746 *   dietary_assessment_dietaryassessmentid_seq    SEQUENCE     �   CREATE SEQUENCE public.dietary_assessment_dietaryassessmentid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 A   DROP SEQUENCE public.dietary_assessment_dietaryassessmentid_seq;
       public          postgres    false    280            �           0    0 *   dietary_assessment_dietaryassessmentid_seq    SEQUENCE OWNED BY     y   ALTER SEQUENCE public.dietary_assessment_dietaryassessmentid_seq OWNED BY public.dietary_assessment.dietaryassessmentid;
          public          postgres    false    279                       1259    16758    dietician_appointments    TABLE     �  CREATE TABLE public.dietician_appointments (
    appointmentid integer NOT NULL,
    patientid integer,
    dieticianid integer,
    appointment_date date,
    appointment_time time without time zone,
    status character varying(20),
    CONSTRAINT dietician_appointments_status_check CHECK (((status)::text = ANY ((ARRAY['Scheduled'::character varying, 'Completed'::character varying, 'Canceled'::character varying])::text[])))
);
 *   DROP TABLE public.dietician_appointments;
       public         heap    postgres    false                       1259    16757 (   dietician_appointments_appointmentid_seq    SEQUENCE     �   CREATE SEQUENCE public.dietician_appointments_appointmentid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE public.dietician_appointments_appointmentid_seq;
       public          postgres    false    282            �           0    0 (   dietician_appointments_appointmentid_seq    SEQUENCE OWNED BY     u   ALTER SEQUENCE public.dietician_appointments_appointmentid_seq OWNED BY public.dietician_appointments.appointmentid;
          public          postgres    false    281                       1259    16777    dismissed_staff    TABLE     �  CREATE TABLE public.dismissed_staff (
    id integer NOT NULL,
    staff_id character varying(255),
    fullname character varying(255) NOT NULL,
    dismissal_date date,
    reason character varying(255),
    comments text,
    dismissal_type character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 #   DROP TABLE public.dismissed_staff;
       public         heap    postgres    false                       1259    16776    dismissed_staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dismissed_staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.dismissed_staff_id_seq;
       public          postgres    false    286            �           0    0    dismissed_staff_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.dismissed_staff_id_seq OWNED BY public.dismissed_staff.id;
          public          postgres    false    285                        1259    16789    dispensations    TABLE     x  CREATE TABLE public.dispensations (
    id integer NOT NULL,
    prescription_id character varying(255),
    prescription_date character varying(255),
    prescription_time character varying(255),
    patient_id character varying(255),
    patient_name character varying(255),
    dispensing_time character varying(255),
    description character varying(255),
    quantity character varying(255),
    unit_cost character varying(255),
    unit_price character varying(255),
    total_amount character varying(255),
    category character varying(255),
    sponsor character varying(255),
    dispensed_by character varying(255)
);
 !   DROP TABLE public.dispensations;
       public         heap    postgres    false                       1259    16788    dispensations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dispensations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.dispensations_id_seq;
       public          postgres    false    288            �           0    0    dispensations_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.dispensations_id_seq OWNED BY public.dispensations.id;
          public          postgres    false    287            "           1259    16798    doctors    TABLE     �  CREATE TABLE public.doctors (
    id integer NOT NULL,
    doctor_id character varying(100) NOT NULL,
    title character varying(255),
    first_name character varying(100) NOT NULL,
    last_name character varying(255) NOT NULL,
    email character varying(100),
    gender character varying(255),
    specialization character varying(100),
    department character varying(100),
    role character varying(100),
    address character varying(200),
    phone_number character varying(20),
    date_of_birth date,
    marital_status character varying(255),
    blood_group character varying(100),
    next_of_kin character varying(100),
    state_of_origin character varying(100),
    lga_of_origin character varying(255),
    employment_date date,
    "Schedule" character varying(255),
    photo character varying(255) NOT NULL,
    qualifications character varying(255),
    years_of_experience character varying(255),
    consultant_flag character varying(255) DEFAULT 'yes'::character varying NOT NULL
);
    DROP TABLE public.doctors;
       public         heap    postgres    false            !           1259    16797    doctors_id_seq    SEQUENCE     �   CREATE SEQUENCE public.doctors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.doctors_id_seq;
       public          postgres    false    290            �           0    0    doctors_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.doctors_id_seq OWNED BY public.doctors.id;
          public          postgres    false    289            $           1259    16808    donor_table    TABLE     k  CREATE TABLE public.donor_table (
    id integer NOT NULL,
    donor_id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    contact_info character varying(255) NOT NULL,
    blood_type character varying(255) NOT NULL,
    donor text NOT NULL,
    reg_date character varying(255) NOT NULL
);
    DROP TABLE public.donor_table;
       public         heap    postgres    false            #           1259    16807    donor_table_id_seq    SEQUENCE     �   CREATE SEQUENCE public.donor_table_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.donor_table_id_seq;
       public          postgres    false    292            �           0    0    donor_table_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.donor_table_id_seq OWNED BY public.donor_table.id;
          public          postgres    false    291            &           1259    16817    drugs    TABLE     �  CREATE TABLE public.drugs (
    drugid integer NOT NULL,
    itemid integer NOT NULL,
    activeingredient character varying(255) NOT NULL,
    brandname character varying(255) NOT NULL,
    dosageform character varying(100) NOT NULL,
    strength character varying(100) NOT NULL,
    prescriptionrequired boolean NOT NULL,
    manufacturer character varying(255) NOT NULL,
    expirydate date NOT NULL,
    batchnumber character varying(100),
    storageconditions character varying(255)
);
    DROP TABLE public.drugs;
       public         heap    postgres    false            %           1259    16816    drugs_drugid_seq    SEQUENCE     �   CREATE SEQUENCE public.drugs_drugid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.drugs_drugid_seq;
       public          postgres    false    294            �           0    0    drugs_drugid_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.drugs_drugid_seq OWNED BY public.drugs.drugid;
          public          postgres    false    293            (           1259    16826 	   embalming    TABLE     �   CREATE TABLE public.embalming (
    embalming_id integer NOT NULL,
    corpse_id character varying(255),
    embalming_date date,
    embalmer_name character varying(255),
    embalming_method character varying(255),
    embalming_cost numeric(10,2)
);
    DROP TABLE public.embalming;
       public         heap    postgres    false            '           1259    16825    embalming_embalming_id_seq    SEQUENCE     �   CREATE SEQUENCE public.embalming_embalming_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.embalming_embalming_id_seq;
       public          postgres    false    296            �           0    0    embalming_embalming_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.embalming_embalming_id_seq OWNED BY public.embalming.embalming_id;
          public          postgres    false    295            *           1259    16835    emergency_contacts    TABLE     G  CREATE TABLE public.emergency_contacts (
    id integer NOT NULL,
    "ContactID" character varying(255) NOT NULL,
    "PatientID" character varying(255) NOT NULL,
    "ContactName" character varying(255) NOT NULL,
    "Relationship" character varying(255) NOT NULL,
    "ContactInformation" character varying(255) NOT NULL
);
 &   DROP TABLE public.emergency_contacts;
       public         heap    postgres    false            )           1259    16834    emergency_contacts_id_seq    SEQUENCE     �   CREATE SEQUENCE public.emergency_contacts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.emergency_contacts_id_seq;
       public          postgres    false    298            �           0    0    emergency_contacts_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.emergency_contacts_id_seq OWNED BY public.emergency_contacts.id;
          public          postgres    false    297            ,           1259    16844 	   employees    TABLE     &  CREATE TABLE public.employees (
    id integer NOT NULL,
    title character varying(255),
    employ_id character varying(50),
    first_name character varying(50),
    last_name character varying(50),
    email character varying(100),
    phone character varying(115),
    address character varying(255),
    hire_date date,
    birth_date date,
    gender character varying(100),
    role character varying(255),
    designation character varying(255),
    department_type character varying(100),
    department character varying(255),
    unit_name character varying(255),
    photo character varying(255),
    employee_type character varying(100),
    emergency_contact_name character varying(100),
    emergency_contact_phone character varying(15),
    emergency_contact_relationship character varying(50),
    status character varying(50) DEFAULT 'Active'::character varying NOT NULL,
    qualification character varying(255),
    other_documents character varying(255),
    bank_name character varying(100),
    account_number character varying(100),
    pension_manager character varying(100),
    pension_number character varying(100),
    referee_name character varying(100),
    referee_contact character varying(100),
    dependent_name character varying(100),
    dependent_relation character varying(100),
    dependent_contact character varying(100),
    grade_level character varying(100),
    confirmation_date character varying(100),
    confirmation_status character varying(100) DEFAULT 'not_confirmed'::character varying,
    work_status character varying(100) DEFAULT 'not_confirmed'::character varying,
    branch character varying(100),
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    staff_category character varying(255),
    leave_allowance numeric(64,2) NOT NULL
);
    DROP TABLE public.employees;
       public         heap    postgres    false            +           1259    16843    employees_id_seq    SEQUENCE     �   CREATE SEQUENCE public.employees_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.employees_id_seq;
       public          postgres    false    300            �           0    0    employees_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.employees_id_seq OWNED BY public.employees.id;
          public          postgres    false    299            >           1259    24611 	   equipment    TABLE     �   CREATE TABLE public.equipment (
    equipment_id integer NOT NULL,
    equipment_name character varying(100) NOT NULL,
    equipment_description text,
    status character varying(20) NOT NULL,
    department character varying(255) NOT NULL
);
    DROP TABLE public.equipment;
       public         heap    postgres    false            =           1259    24610    equipment_equipment_id_seq    SEQUENCE     �   CREATE SEQUENCE public.equipment_equipment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.equipment_equipment_id_seq;
       public          postgres    false    318            �           0    0    equipment_equipment_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.equipment_equipment_id_seq OWNED BY public.equipment.equipment_id;
          public          postgres    false    317            @           1259    24620    error_logger    TABLE     �   CREATE TABLE public.error_logger (
    id integer NOT NULL,
    error_message text NOT NULL,
    error_timestamp timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
     DROP TABLE public.error_logger;
       public         heap    postgres    false            ?           1259    24619    error_logger_id_seq    SEQUENCE     �   CREATE SEQUENCE public.error_logger_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.error_logger_id_seq;
       public          postgres    false    320            �           0    0    error_logger_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.error_logger_id_seq OWNED BY public.error_logger.id;
          public          postgres    false    319            8           1259    17001    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            7           1259    17000    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    312            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    311            B           1259    24630    feedback_surveys    TABLE     �   CREATE TABLE public.feedback_surveys (
    id integer NOT NULL,
    surveyid character varying(255) NOT NULL,
    patientid text NOT NULL,
    questions character varying(255) NOT NULL,
    responses character varying(255) NOT NULL
);
 $   DROP TABLE public.feedback_surveys;
       public         heap    postgres    false            A           1259    24629    feedback_surveys_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feedback_surveys_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.feedback_surveys_id_seq;
       public          postgres    false    322            �           0    0    feedback_surveys_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.feedback_surveys_id_seq OWNED BY public.feedback_surveys.id;
          public          postgres    false    321            D           1259    24639    financialreports    TABLE     �  CREATE TABLE public.financialreports (
    id integer NOT NULL,
    reportid character varying(100) NOT NULL,
    reportname character varying(100) NOT NULL,
    reportdate date NOT NULL,
    reporttype character varying(50) DEFAULT NULL::character varying,
    reportperiod character varying(50) DEFAULT NULL::character varying,
    reportdescription text,
    reportstatus character varying(50) NOT NULL,
    reportowner character varying(100) DEFAULT NULL::character varying,
    lastupdate timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT financialreports_reportstatus_check CHECK (((reportstatus)::text = ANY ((ARRAY['Draft'::character varying, 'Pending Approval'::character varying, 'Approved'::character varying])::text[])))
);
 $   DROP TABLE public.financialreports;
       public         heap    postgres    false            C           1259    24638    financialreports_id_seq    SEQUENCE     �   CREATE SEQUENCE public.financialreports_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.financialreports_id_seq;
       public          postgres    false    324            �           0    0    financialreports_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.financialreports_id_seq OWNED BY public.financialreports.id;
          public          postgres    false    323            F           1259    24662 	   food_item    TABLE     �  CREATE TABLE public.food_item (
    fooditemid integer NOT NULL,
    name character varying(100) DEFAULT NULL::character varying,
    category character varying(20) DEFAULT NULL::character varying,
    calories_per_100g numeric(6,2) DEFAULT NULL::numeric,
    nutritional_information jsonb,
    CONSTRAINT food_item_category_check CHECK (((category)::text = ANY ((ARRAY['Protein'::character varying, 'Carbohydrate'::character varying, 'Fruit'::character varying, 'Vegetable'::character varying])::text[])))
);
    DROP TABLE public.food_item;
       public         heap    postgres    false            E           1259    24661    food_item_fooditemid_seq    SEQUENCE     �   CREATE SEQUENCE public.food_item_fooditemid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.food_item_fooditemid_seq;
       public          postgres    false    326            �           0    0    food_item_fooditemid_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.food_item_fooditemid_seq OWNED BY public.food_item.fooditemid;
          public          postgres    false    325            H           1259    24675    generalledger    TABLE     w  CREATE TABLE public.generalledger (
    id integer NOT NULL,
    transaction_id character varying(100) NOT NULL,
    account_id character varying(100) NOT NULL,
    transaction_date date NOT NULL,
    transaction_type character varying(6) NOT NULL,
    transaction_amount numeric(10,2) NOT NULL,
    transaction_description character varying(255) DEFAULT NULL::character varying,
    last_update timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT generalledger_transaction_type_check CHECK (((transaction_type)::text = ANY ((ARRAY['Debit'::character varying, 'Credit'::character varying])::text[])))
);
 !   DROP TABLE public.generalledger;
       public         heap    postgres    false            G           1259    24674    generalledger_id_seq    SEQUENCE     �   CREATE SEQUENCE public.generalledger_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.generalledger_id_seq;
       public          postgres    false    328            �           0    0    generalledger_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.generalledger_id_seq OWNED BY public.generalledger.id;
          public          postgres    false    327            J           1259    24685    incident_report    TABLE     �  CREATE TABLE public.incident_report (
    id integer NOT NULL,
    incident_id character varying(255) NOT NULL,
    incident_type character varying(255) NOT NULL,
    incident_date character varying(255) NOT NULL,
    incident_description text NOT NULL,
    corrective_actions_taken text NOT NULL,
    report_status character varying(255) NOT NULL,
    report_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 #   DROP TABLE public.incident_report;
       public         heap    postgres    false            I           1259    24684    incident_report_id_seq    SEQUENCE     �   CREATE SEQUENCE public.incident_report_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.incident_report_id_seq;
       public          postgres    false    330            �           0    0    incident_report_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.incident_report_id_seq OWNED BY public.incident_report.id;
          public          postgres    false    329            L           1259    24695 	   inpatient    TABLE     �  CREATE TABLE public.inpatient (
    id integer NOT NULL,
    patientid character varying(100) NOT NULL,
    roomnumber character varying(20) NOT NULL,
    admissiondate date NOT NULL,
    dischargedate date,
    diagnosis text,
    procedures character varying(100) DEFAULT NULL::character varying,
    medication character varying(100) DEFAULT NULL::character varying,
    attendingphysician character varying(100) DEFAULT NULL::character varying,
    treatmentplan text,
    billinginformationid character varying(100) DEFAULT NULL::character varying,
    status character varying(10) NOT NULL,
    CONSTRAINT inpatient_status_check CHECK (((status)::text = ANY ((ARRAY['Admitted'::character varying, 'Discharged'::character varying])::text[])))
);
    DROP TABLE public.inpatient;
       public         heap    postgres    false            K           1259    24694    inpatient_id_seq    SEQUENCE     �   CREATE SEQUENCE public.inpatient_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.inpatient_id_seq;
       public          postgres    false    332            �           0    0    inpatient_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.inpatient_id_seq OWNED BY public.inpatient.id;
          public          postgres    false    331            N           1259    24709 	   insurance    TABLE     $  CREATE TABLE public.insurance (
    id integer NOT NULL,
    insurance_id character varying(255) NOT NULL,
    patient_id integer NOT NULL,
    insurance_provider character varying(100) NOT NULL,
    policy_number character varying(50) NOT NULL,
    coverage_amount numeric(64,2) NOT NULL
);
    DROP TABLE public.insurance;
       public         heap    postgres    false            M           1259    24708    insurance_id_seq    SEQUENCE     �   CREATE SEQUENCE public.insurance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.insurance_id_seq;
       public          postgres    false    334            �           0    0    insurance_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.insurance_id_seq OWNED BY public.insurance.id;
          public          postgres    false    333            P           1259    24716    investigations    TABLE     �   CREATE TABLE public.investigations (
    id integer NOT NULL,
    investigation_id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    department character varying(255) NOT NULL
);
 "   DROP TABLE public.investigations;
       public         heap    postgres    false            O           1259    24715    investigations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.investigations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.investigations_id_seq;
       public          postgres    false    336            �           0    0    investigations_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.investigations_id_seq OWNED BY public.investigations.id;
          public          postgres    false    335            R           1259    24725    item    TABLE     �  CREATE TABLE public.item (
    id integer NOT NULL,
    item_id character varying(100) NOT NULL,
    item_group character varying(100) NOT NULL,
    item_subgroup character varying(100) NOT NULL,
    item_name character varying(100) NOT NULL,
    status character varying(100) NOT NULL,
    item_category character varying(100) NOT NULL,
    date_added timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.item;
       public         heap    postgres    false            X           1259    24751 
   item_group    TABLE     �   CREATE TABLE public.item_group (
    id integer NOT NULL,
    itemgroup_id character varying(100) NOT NULL,
    itemgroupname character varying(100) NOT NULL,
    comment text
);
    DROP TABLE public.item_group;
       public         heap    postgres    false            W           1259    24750    item_group_id_seq    SEQUENCE     �   CREATE SEQUENCE public.item_group_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.item_group_id_seq;
       public          postgres    false    344            �           0    0    item_group_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.item_group_id_seq OWNED BY public.item_group.id;
          public          postgres    false    343            Q           1259    24724    item_id_seq    SEQUENCE     �   CREATE SEQUENCE public.item_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.item_id_seq;
       public          postgres    false    338            �           0    0    item_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.item_id_seq OWNED BY public.item.id;
          public          postgres    false    337            T           1259    24735    itemcategory    TABLE     �   CREATE TABLE public.itemcategory (
    id integer NOT NULL,
    categoryid character varying(100) NOT NULL,
    categoryname character varying(100) NOT NULL,
    description text
);
     DROP TABLE public.itemcategory;
       public         heap    postgres    false            S           1259    24734    itemcategory_id_seq    SEQUENCE     �   CREATE SEQUENCE public.itemcategory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.itemcategory_id_seq;
       public          postgres    false    340            �           0    0    itemcategory_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.itemcategory_id_seq OWNED BY public.itemcategory.id;
          public          postgres    false    339            V           1259    24744    itemsubgroup    TABLE     �   CREATE TABLE public.itemsubgroup (
    id integer NOT NULL,
    subgroupid character varying(100) NOT NULL,
    subgroupname character varying(100) NOT NULL,
    alias character varying(50)
);
     DROP TABLE public.itemsubgroup;
       public         heap    postgres    false            U           1259    24743    itemsubgroup_id_seq    SEQUENCE     �   CREATE SEQUENCE public.itemsubgroup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.itemsubgroup_id_seq;
       public          postgres    false    342            �           0    0    itemsubgroup_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.itemsubgroup_id_seq OWNED BY public.itemsubgroup.id;
          public          postgres    false    341            \           1259    24769    job_applications    TABLE     �  CREATE TABLE public.job_applications (
    id integer NOT NULL,
    firstname character varying(50) NOT NULL,
    lastname character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    position_applying_for character varying(100) NOT NULL,
    available_date date,
    employment_status character varying(50),
    resume_link character varying(200),
    resume_document character varying(200),
    reference_firstname character varying(50),
    reference_lastname character varying(50),
    referees_name character varying(100),
    reference_email character varying(100),
    apply_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
 $   DROP TABLE public.job_applications;
       public         heap    postgres    false            [           1259    24768    job_applications_id_seq    SEQUENCE     �   CREATE SEQUENCE public.job_applications_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.job_applications_id_seq;
       public          postgres    false    348            �           0    0    job_applications_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.job_applications_id_seq OWNED BY public.job_applications.id;
          public          postgres    false    347            6           1259    16993    job_batches    TABLE     d  CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);
    DROP TABLE public.job_batches;
       public         heap    postgres    false            5           1259    16984    jobs    TABLE     �   CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);
    DROP TABLE public.jobs;
       public         heap    postgres    false            4           1259    16983    jobs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.jobs_id_seq;
       public          postgres    false    309            �           0    0    jobs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;
          public          postgres    false    308            Z           1259    24760    laboratory_tests    TABLE     '  CREATE TABLE public.laboratory_tests (
    id integer NOT NULL,
    test_id character varying(255) NOT NULL,
    patient_id integer NOT NULL,
    test_name character varying(100) NOT NULL,
    test_result text,
    test_date date NOT NULL,
    ordering_doctor character varying(255) NOT NULL
);
 $   DROP TABLE public.laboratory_tests;
       public         heap    postgres    false            Y           1259    24759    laboratory_tests_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laboratory_tests_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.laboratory_tests_id_seq;
       public          postgres    false    346            �           0    0    laboratory_tests_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.laboratory_tests_id_seq OWNED BY public.laboratory_tests.id;
          public          postgres    false    345            ^           1259    24780    labradiology    TABLE     �  CREATE TABLE public.labradiology (
    id integer NOT NULL,
    test_id character varying(100) NOT NULL,
    patient_id character varying(100) NOT NULL,
    order_date timestamp without time zone NOT NULL,
    test_name character varying(100) NOT NULL,
    test_type character varying(20) NOT NULL,
    order_status character varying(20) NOT NULL,
    result_date timestamp without time zone,
    result text,
    technician_id character varying(100),
    physician_id character varying(100),
    comment text,
    CONSTRAINT labradiology_order_status_check CHECK (((order_status)::text = ANY ((ARRAY['Ordered'::character varying, 'In Progress'::character varying, 'Completed'::character varying, 'Cancelled'::character varying])::text[]))),
    CONSTRAINT labradiology_test_type_check CHECK (((test_type)::text = ANY ((ARRAY['Lab'::character varying, 'Radiology'::character varying])::text[])))
);
     DROP TABLE public.labradiology;
       public         heap    postgres    false            ]           1259    24779    labradiology_id_seq    SEQUENCE     �   CREATE SEQUENCE public.labradiology_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.labradiology_id_seq;
       public          postgres    false    350            �           0    0    labradiology_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.labradiology_id_seq OWNED BY public.labradiology.id;
          public          postgres    false    349            b           1259    24799    leave_entitlement    TABLE     .  CREATE TABLE public.leave_entitlement (
    id integer NOT NULL,
    staff_id character varying(50) NOT NULL,
    fullname character varying(100) NOT NULL,
    employment_date date NOT NULL,
    allowance numeric(14,2) NOT NULL,
    department character varying(100) NOT NULL,
    branch character varying(100) NOT NULL,
    carry_over_balance numeric(14,2) NOT NULL,
    reset_date date NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 %   DROP TABLE public.leave_entitlement;
       public         heap    postgres    false            a           1259    24798    leave_entitlement_id_seq    SEQUENCE     �   CREATE SEQUENCE public.leave_entitlement_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.leave_entitlement_id_seq;
       public          postgres    false    354            �           0    0    leave_entitlement_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.leave_entitlement_id_seq OWNED BY public.leave_entitlement.id;
          public          postgres    false    353            d           1259    24808 
   leave_type    TABLE     <  CREATE TABLE public.leave_type (
    id integer NOT NULL,
    leave_type character varying(255) NOT NULL,
    leave_details character varying(25) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.leave_type;
       public         heap    postgres    false            c           1259    24807    leave_type_id_seq    SEQUENCE     �   CREATE SEQUENCE public.leave_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.leave_type_id_seq;
       public          postgres    false    356            �           0    0    leave_type_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.leave_type_id_seq OWNED BY public.leave_type.id;
          public          postgres    false    355            `           1259    24791    leaverequests    TABLE     �  CREATE TABLE public.leaverequests (
    id integer NOT NULL,
    staff_id character varying(100),
    leave_type character varying(50),
    start_date date,
    end_date date,
    status character varying(20),
    CONSTRAINT leaverequests_status_check CHECK (((status)::text = ANY ((ARRAY['Pending'::character varying, 'Approved'::character varying, 'Rejected'::character varying])::text[])))
);
 !   DROP TABLE public.leaverequests;
       public         heap    postgres    false            _           1259    24790    leaverequests_id_seq    SEQUENCE     �   CREATE SEQUENCE public.leaverequests_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.leaverequests_id_seq;
       public          postgres    false    352            �           0    0    leaverequests_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.leaverequests_id_seq OWNED BY public.leaverequests.id;
          public          postgres    false    351            f           1259    24817    meal_schedule    TABLE     ;  CREATE TABLE public.meal_schedule (
    mealscheduleid integer NOT NULL,
    dietplanid integer,
    day_of_the_week character varying(20),
    time_of_day character varying(20),
    fooditemid integer,
    portion_size numeric(6,2),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 !   DROP TABLE public.meal_schedule;
       public         heap    postgres    false            e           1259    24816     meal_schedule_mealscheduleid_seq    SEQUENCE     �   CREATE SEQUENCE public.meal_schedule_mealscheduleid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.meal_schedule_mealscheduleid_seq;
       public          postgres    false    358            �           0    0     meal_schedule_mealscheduleid_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.meal_schedule_mealscheduleid_seq OWNED BY public.meal_schedule.mealscheduleid;
          public          postgres    false    357            h           1259    24825    medical_records    TABLE     C  CREATE TABLE public.medical_records (
    record_id integer NOT NULL,
    patient_id integer NOT NULL,
    doctor_id integer NOT NULL,
    record_date date NOT NULL,
    diagnosis text NOT NULL,
    "Treatment Plan" character varying(255),
    "Test Results" character varying(255),
    file_path character varying(255)
);
 #   DROP TABLE public.medical_records;
       public         heap    postgres    false            g           1259    24824    medical_records_record_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medical_records_record_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.medical_records_record_id_seq;
       public          postgres    false    360            �           0    0    medical_records_record_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.medical_records_record_id_seq OWNED BY public.medical_records.record_id;
          public          postgres    false    359            j           1259    24834 
   medication    TABLE     �  CREATE TABLE public.medication (
    id integer NOT NULL,
    medicationid character varying(100),
    medication_name character varying(100),
    generic_name character varying(100),
    manufacturer character varying(100),
    strength character varying(50),
    dosage_form character varying(50),
    description text,
    unit_price numeric(10,2),
    expiry_date date,
    prescription_required boolean
);
    DROP TABLE public.medication;
       public         heap    postgres    false            l           1259    24843    medication_categories    TABLE     �   CREATE TABLE public.medication_categories (
    id integer NOT NULL,
    categoryid character varying(50),
    category_name character varying(50),
    description text
);
 )   DROP TABLE public.medication_categories;
       public         heap    postgres    false            k           1259    24842    medication_categories_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medication_categories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.medication_categories_id_seq;
       public          postgres    false    364            �           0    0    medication_categories_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.medication_categories_id_seq OWNED BY public.medication_categories.id;
          public          postgres    false    363            i           1259    24833    medication_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medication_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.medication_id_seq;
       public          postgres    false    362                        0    0    medication_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.medication_id_seq OWNED BY public.medication.id;
          public          postgres    false    361            n           1259    24852    medication_inventory    TABLE     @  CREATE TABLE public.medication_inventory (
    id integer NOT NULL,
    inventoryid character varying(100),
    medicationid character varying(100),
    quantity character varying(100),
    purchase_date date,
    supplier character varying(100),
    purchase_price numeric(10,2),
    location character varying(100)
);
 (   DROP TABLE public.medication_inventory;
       public         heap    postgres    false            m           1259    24851    medication_inventory_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medication_inventory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.medication_inventory_id_seq;
       public          postgres    false    366                       0    0    medication_inventory_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.medication_inventory_id_seq OWNED BY public.medication_inventory.id;
          public          postgres    false    365            p           1259    24861    mews_vitals    TABLE     �  CREATE TABLE public.mews_vitals (
    mews_id integer NOT NULL,
    patient_id integer NOT NULL,
    recorded_date date,
    recorded_time time without time zone,
    systolic_bp integer,
    heart_rate integer,
    respiratory_rate integer,
    spo2 numeric(4,1),
    temperature numeric(4,1),
    avpu_score_gcs character varying(10),
    urine_output_ml_hr numeric(5,2),
    total_score integer,
    oxy_posted_by character varying(100)
);
    DROP TABLE public.mews_vitals;
       public         heap    postgres    false            o           1259    24860    mews_vitals_mews_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mews_vitals_mews_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.mews_vitals_mews_id_seq;
       public          postgres    false    368                       0    0    mews_vitals_mews_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.mews_vitals_mews_id_seq OWNED BY public.mews_vitals.mews_id;
          public          postgres    false    367            .           1259    16936 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            -           1259    16935    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    302                       0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    301            r           1259    24868    mortuary    TABLE     S  CREATE TABLE public.mortuary (
    id integer NOT NULL,
    deceased_id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    date_of_death date NOT NULL,
    cause_of_death character varying(255) NOT NULL,
    next_of_kin character varying(255) NOT NULL,
    mortuary_attendant character varying(255) NOT NULL
);
    DROP TABLE public.mortuary;
       public         heap    postgres    false            v           1259    24888    mortuary_bill    TABLE       CREATE TABLE public.mortuary_bill (
    bill_id integer NOT NULL,
    corpse_id character varying(255),
    date_issued date,
    amount_paid numeric(10,2),
    total_amount numeric(10,2) NOT NULL,
    payment_status character varying(20),
    payer_name character varying(255),
    payment_date date,
    charge_date character varying(255) NOT NULL,
    entered_by character varying(255),
    additional_notes text,
    updated_by character varying(100),
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 !   DROP TABLE public.mortuary_bill;
       public         heap    postgres    false            u           1259    24887    mortuary_bill_bill_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mortuary_bill_bill_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.mortuary_bill_bill_id_seq;
       public          postgres    false    374                       0    0    mortuary_bill_bill_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.mortuary_bill_bill_id_seq OWNED BY public.mortuary_bill.bill_id;
          public          postgres    false    373            x           1259    24898    mortuary_daily_tasks    TABLE       CREATE TABLE public.mortuary_daily_tasks (
    task_id integer NOT NULL,
    case_id character varying(255),
    staff_id character varying(255),
    task_date date,
    task_description text,
    status character varying(255),
    entered_by character varying(255),
    notes text
);
 (   DROP TABLE public.mortuary_daily_tasks;
       public         heap    postgres    false            w           1259    24897     mortuary_daily_tasks_task_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mortuary_daily_tasks_task_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.mortuary_daily_tasks_task_id_seq;
       public          postgres    false    376                       0    0     mortuary_daily_tasks_task_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.mortuary_daily_tasks_task_id_seq OWNED BY public.mortuary_daily_tasks.task_id;
          public          postgres    false    375            q           1259    24867    mortuary_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mortuary_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.mortuary_id_seq;
       public          postgres    false    370                       0    0    mortuary_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.mortuary_id_seq OWNED BY public.mortuary.id;
          public          postgres    false    369            z           1259    24907    mortuary_service    TABLE     �  CREATE TABLE public.mortuary_service (
    id integer NOT NULL,
    service_name character varying(100) NOT NULL,
    price numeric(10,2) NOT NULL,
    details character varying(255) NOT NULL,
    added_by character varying(100) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_by character varying(100) NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 $   DROP TABLE public.mortuary_service;
       public         heap    postgres    false            y           1259    24906    mortuary_service_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mortuary_service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.mortuary_service_id_seq;
       public          postgres    false    378                       0    0    mortuary_service_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.mortuary_service_id_seq OWNED BY public.mortuary_service.id;
          public          postgres    false    377            t           1259    24877    mortuarymaterials    TABLE     ,  CREATE TABLE public.mortuarymaterials (
    id integer NOT NULL,
    material_id character varying(255) NOT NULL,
    material_name character varying(255) NOT NULL,
    category character varying(255) NOT NULL,
    description text,
    quantity character varying(255) NOT NULL,
    unit character varying(50) NOT NULL,
    added_by character varying(255),
    updated_by character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 %   DROP TABLE public.mortuarymaterials;
       public         heap    postgres    false            s           1259    24876    mortuarymaterials_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mortuarymaterials_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.mortuarymaterials_id_seq;
       public          postgres    false    372                       0    0    mortuarymaterials_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.mortuarymaterials_id_seq OWNED BY public.mortuarymaterials.id;
          public          postgres    false    371            |           1259    24918    notes    TABLE     �   CREATE TABLE public.notes (
    note_id integer NOT NULL,
    patient_id integer NOT NULL,
    doctor_id integer NOT NULL,
    note text,
    recorded_date timestamp without time zone
);
    DROP TABLE public.notes;
       public         heap    postgres    false            {           1259    24917    notes_note_id_seq    SEQUENCE     �   CREATE SEQUENCE public.notes_note_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.notes_note_id_seq;
       public          postgres    false    380            	           0    0    notes_note_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.notes_note_id_seq OWNED BY public.notes.note_id;
          public          postgres    false    379            ~           1259    24927    notifications_alerts    TABLE     '  CREATE TABLE public.notifications_alerts (
    id integer NOT NULL,
    notification_id character varying(255) NOT NULL,
    patient_id character varying(255) NOT NULL,
    message character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 (   DROP TABLE public.notifications_alerts;
       public         heap    postgres    false            }           1259    24926    notifications_alerts_id_seq    SEQUENCE     �   CREATE SEQUENCE public.notifications_alerts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.notifications_alerts_id_seq;
       public          postgres    false    382            
           0    0    notifications_alerts_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.notifications_alerts_id_seq OWNED BY public.notifications_alerts.id;
          public          postgres    false    381            �           1259    24937    nurses    TABLE     �  CREATE TABLE public.nurses (
    id integer NOT NULL,
    nurse_id character varying(100) NOT NULL,
    nurse_name character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(255) NOT NULL,
    department character varying(100) NOT NULL,
    address character varying(200),
    phone_number character varying(20),
    date_of_birth date,
    joining_date date
);
    DROP TABLE public.nurses;
       public         heap    postgres    false                       1259    24936    nurses_id_seq    SEQUENCE     �   CREATE SEQUENCE public.nurses_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.nurses_id_seq;
       public          postgres    false    384                       0    0    nurses_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.nurses_id_seq OWNED BY public.nurses.id;
          public          postgres    false    383            �           1259    24947    nutrition_log    TABLE     �   CREATE TABLE public.nutrition_log (
    nutritionlogid integer NOT NULL,
    patientid integer,
    date date,
    meal character varying(20),
    fooditemid integer,
    portion_size numeric(6,2),
    notes text
);
 !   DROP TABLE public.nutrition_log;
       public         heap    postgres    false            �           1259    24946     nutrition_log_nutritionlogid_seq    SEQUENCE     �   CREATE SEQUENCE public.nutrition_log_nutritionlogid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.nutrition_log_nutritionlogid_seq;
       public          postgres    false    386                       0    0     nutrition_log_nutritionlogid_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.nutrition_log_nutritionlogid_seq OWNED BY public.nutrition_log.nutritionlogid;
          public          postgres    false    385            �           1259    24956    ophthalmology_vitals    TABLE     H  CREATE TABLE public.ophthalmology_vitals (
    vital_id integer NOT NULL,
    patient_id integer NOT NULL,
    recorded_date date,
    recorded_time time without time zone,
    va_re character varying(50),
    va_le character varying(50),
    va_pin_hole_re character varying(50),
    va_pin_hole_le character varying(50),
    va_glasses_re character varying(50),
    va_glasses_le character varying(50),
    bp_systolic integer,
    bp_diastolic integer,
    fbs numeric(5,2),
    rbs numeric(5,2),
    rvs numeric(5,2),
    nurse_name character varying(100),
    nurse_note text
);
 (   DROP TABLE public.ophthalmology_vitals;
       public         heap    postgres    false            �           1259    24955 !   ophthalmology_vitals_vital_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ophthalmology_vitals_vital_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.ophthalmology_vitals_vital_id_seq;
       public          postgres    false    388                       0    0 !   ophthalmology_vitals_vital_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.ophthalmology_vitals_vital_id_seq OWNED BY public.ophthalmology_vitals.vital_id;
          public          postgres    false    387            �           1259    24965    optometry_subjective_refraction    TABLE     q  CREATE TABLE public.optometry_subjective_refraction (
    refraction_id integer NOT NULL,
    patient_id integer NOT NULL,
    recorded_date date,
    recorded_time time without time zone,
    subjective_refraction_re character varying(100),
    subjective_refraction_le character varying(100),
    optometrist_name character varying(100),
    optometrist_note text
);
 3   DROP TABLE public.optometry_subjective_refraction;
       public         heap    postgres    false            �           1259    24964 1   optometry_subjective_refraction_refraction_id_seq    SEQUENCE     �   CREATE SEQUENCE public.optometry_subjective_refraction_refraction_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 H   DROP SEQUENCE public.optometry_subjective_refraction_refraction_id_seq;
       public          postgres    false    390                       0    0 1   optometry_subjective_refraction_refraction_id_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.optometry_subjective_refraction_refraction_id_seq OWNED BY public.optometry_subjective_refraction.refraction_id;
          public          postgres    false    389            �           1259    24974 
   outpatient    TABLE     m  CREATE TABLE public.outpatient (
    id integer NOT NULL,
    visitid character varying(50),
    patientid character varying(50) NOT NULL,
    dateofservice date NOT NULL,
    servicetype character varying(50),
    attendingphysician character varying(100),
    diagnosis character varying(100),
    procedures character varying(100),
    medication character varying(100),
    billinginformationid character varying(100),
    status character varying(20) NOT NULL,
    CONSTRAINT outpatient_status_check CHECK (((status)::text = ANY ((ARRAY['Scheduled'::character varying, 'Completed'::character varying])::text[])))
);
    DROP TABLE public.outpatient;
       public         heap    postgres    false            �           1259    24973    outpatient_id_seq    SEQUENCE     �   CREATE SEQUENCE public.outpatient_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.outpatient_id_seq;
       public          postgres    false    392                       0    0    outpatient_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.outpatient_id_seq OWNED BY public.outpatient.id;
          public          postgres    false    391            �           1259    24984    package    TABLE     Y  CREATE TABLE public.package (
    id integer NOT NULL,
    package_id character varying(50),
    package_name character varying(50),
    package_type character varying(50),
    package_price numeric(10,2),
    actual_price numeric(10,2),
    package_duration character varying(50),
    status character varying(50),
    package_services text
);
    DROP TABLE public.package;
       public         heap    postgres    false            �           1259    24983    package_id_seq    SEQUENCE     �   CREATE SEQUENCE public.package_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.package_id_seq;
       public          postgres    false    394                       0    0    package_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.package_id_seq OWNED BY public.package.id;
          public          postgres    false    393            1           1259    16953    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �           1259    25002    patient_dietary_preferences    TABLE     �   CREATE TABLE public.patient_dietary_preferences (
    patient_dietary_preferences_id integer NOT NULL,
    patient_id integer,
    food_allergies text,
    dietary_restrictions text,
    likes_and_dislikes text
);
 /   DROP TABLE public.patient_dietary_preferences;
       public         heap    postgres    false            �           1259    25001 >   patient_dietary_preferences_patient_dietary_preferences_id_seq    SEQUENCE     �   CREATE SEQUENCE public.patient_dietary_preferences_patient_dietary_preferences_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 U   DROP SEQUENCE public.patient_dietary_preferences_patient_dietary_preferences_id_seq;
       public          postgres    false    398                       0    0 >   patient_dietary_preferences_patient_dietary_preferences_id_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.patient_dietary_preferences_patient_dietary_preferences_id_seq OWNED BY public.patient_dietary_preferences.patient_dietary_preferences_id;
          public          postgres    false    397            �           1259    25011    patient_document    TABLE     M  CREATE TABLE public.patient_document (
    id integer NOT NULL,
    document_id character varying(100) NOT NULL,
    details character varying(255) NOT NULL,
    document character varying(255) NOT NULL,
    patient_id character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 $   DROP TABLE public.patient_document;
       public         heap    postgres    false            �           1259    25010    patient_document_id_seq    SEQUENCE     �   CREATE SEQUENCE public.patient_document_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.patient_document_id_seq;
       public          postgres    false    400                       0    0    patient_document_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.patient_document_id_seq OWNED BY public.patient_document.id;
          public          postgres    false    399            �           1259    25021    patient_medical_history    TABLE     �  CREATE TABLE public.patient_medical_history (
    id integer NOT NULL,
    historyid character varying(100),
    patientid character varying(100) NOT NULL,
    encounterid integer,
    encounterdate date,
    diagnosis character varying(100),
    procedures character varying(100),
    medication character varying(100),
    immunization character varying(100),
    medicalhistory text,
    surgicalhistory text,
    allergies text,
    currentmedications text,
    familyhistory text,
    notes text
);
 +   DROP TABLE public.patient_medical_history;
       public         heap    postgres    false            �           1259    25020    patient_medical_history_id_seq    SEQUENCE     �   CREATE SEQUENCE public.patient_medical_history_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.patient_medical_history_id_seq;
       public          postgres    false    402                       0    0    patient_medical_history_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.patient_medical_history_id_seq OWNED BY public.patient_medical_history.id;
          public          postgres    false    401            �           1259    24993    patientownmedication    TABLE     �   CREATE TABLE public.patientownmedication (
    id integer NOT NULL,
    drug_name character varying(255),
    category character varying(255),
    added_date date,
    time_added time without time zone,
    added_by character varying(255)
);
 (   DROP TABLE public.patientownmedication;
       public         heap    postgres    false            �           1259    24992    patientownmedication_id_seq    SEQUENCE     �   CREATE SEQUENCE public.patientownmedication_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.patientownmedication_id_seq;
       public          postgres    false    396                       0    0    patientownmedication_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.patientownmedication_id_seq OWNED BY public.patientownmedication.id;
          public          postgres    false    395            �           1259    25030    payroll    TABLE     �  CREATE TABLE public.payroll (
    id integer NOT NULL,
    month_year character varying(200) NOT NULL,
    employee_name character varying(200) NOT NULL,
    basic_salary character varying(200) NOT NULL,
    allowance character varying(200) NOT NULL,
    others character varying(200) NOT NULL,
    gross_pay character varying(200) NOT NULL,
    sanction character varying(200) NOT NULL,
    other_deduction character varying(200) NOT NULL,
    loan numeric(10,2),
    type character varying(200),
    total_due character varying(200) NOT NULL,
    net_pay character varying(200) NOT NULL,
    status character varying(200) DEFAULT 'not_paid'::character varying NOT NULL,
    staff_id character varying(200) NOT NULL,
    account_name character varying(255),
    bank_name character varying(255),
    account_number character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.payroll;
       public         heap    postgres    false            �           1259    25029    payroll_id_seq    SEQUENCE     �   CREATE SEQUENCE public.payroll_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.payroll_id_seq;
       public          postgres    false    404                       0    0    payroll_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.payroll_id_seq OWNED BY public.payroll.id;
          public          postgres    false    403            �           1259    25042    payroll_log    TABLE     �  CREATE TABLE public.payroll_log (
    id integer NOT NULL,
    month_year character varying(200) NOT NULL,
    amount character varying(200) NOT NULL,
    status character varying(200) NOT NULL,
    staff_workers character varying(200) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.payroll_log;
       public         heap    postgres    false            �           1259    25041    payroll_log_id_seq    SEQUENCE     �   CREATE SEQUENCE public.payroll_log_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.payroll_log_id_seq;
       public          postgres    false    406                       0    0    payroll_log_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.payroll_log_id_seq OWNED BY public.payroll_log.id;
          public          postgres    false    405            �           1259    25053    personal_requests    TABLE     �  CREATE TABLE public.personal_requests (
    id integer NOT NULL,
    staff_id character varying(11),
    fullname character varying(255) NOT NULL,
    request_type character varying(255),
    details text,
    start_date date,
    end_date date,
    status character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 %   DROP TABLE public.personal_requests;
       public         heap    postgres    false            �           1259    25052    personal_requests_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_requests_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.personal_requests_id_seq;
       public          postgres    false    408                       0    0    personal_requests_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.personal_requests_id_seq OWNED BY public.personal_requests.id;
          public          postgres    false    407            �           1259    25064    pharmacy    TABLE     �  CREATE TABLE public.pharmacy (
    id integer NOT NULL,
    itemid character varying(255),
    itemname character varying(255),
    itemdescription character varying(255),
    unitcost numeric(10,2),
    unitsales numeric(10,2),
    itemquantity numeric(12,2) NOT NULL,
    itemexpirydate date,
    status character varying(255),
    reg_time time without time zone,
    reg_date date,
    batch_no character varying(255),
    posted_by character varying(255)
);
    DROP TABLE public.pharmacy;
       public         heap    postgres    false            �           1259    25063    pharmacy_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pharmacy_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.pharmacy_id_seq;
       public          postgres    false    410                       0    0    pharmacy_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.pharmacy_id_seq OWNED BY public.pharmacy.id;
          public          postgres    false    409            �           1259    25073    pharmacy_inventory    TABLE     |  CREATE TABLE public.pharmacy_inventory (
    id integer NOT NULL,
    item_id character varying(255) NOT NULL,
    item_name character varying(255) NOT NULL,
    quantity_in_stock character varying(255) NOT NULL,
    amount numeric(64,2) NOT NULL,
    reorder_level character varying(255) NOT NULL,
    stock_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 &   DROP TABLE public.pharmacy_inventory;
       public         heap    postgres    false            �           1259    25072    pharmacy_inventory_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pharmacy_inventory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.pharmacy_inventory_id_seq;
       public          postgres    false    412                       0    0    pharmacy_inventory_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.pharmacy_inventory_id_seq OWNED BY public.pharmacy_inventory.id;
          public          postgres    false    411            �           1259    25083    prescriptions    TABLE     #  CREATE TABLE public.prescriptions (
    id integer NOT NULL,
    patient_id character varying(115) NOT NULL,
    doctor_id character varying(115) NOT NULL,
    drug_name character varying(255) NOT NULL,
    dosage character varying(255) NOT NULL,
    frequency character varying(255) NOT NULL,
    duration character varying(255) NOT NULL,
    prescription_date date NOT NULL,
    record_time character varying(255),
    quantity numeric(64,2) NOT NULL,
    instructions text,
    route character varying(255) NOT NULL,
    amount numeric(64,2) NOT NULL,
    status character varying(255) DEFAULT 'active'::character varying NOT NULL,
    confirmation character varying(255) DEFAULT 'pending'::character varying NOT NULL,
    accept_status character varying(255) DEFAULT 'pending'::character varying
);
 !   DROP TABLE public.prescriptions;
       public         heap    postgres    false            �           1259    25082    prescriptions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.prescriptions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.prescriptions_id_seq;
       public          postgres    false    414                       0    0    prescriptions_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.prescriptions_id_seq OWNED BY public.prescriptions.id;
          public          postgres    false    413            �           1259    25095 
   price_list    TABLE     �  CREATE TABLE public.price_list (
    id integer NOT NULL,
    price_name character varying(100) NOT NULL,
    amount character varying(300) NOT NULL,
    description character varying(255) NOT NULL,
    freeday character varying(100),
    added_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    added_by character varying(100),
    updated_by character varying(100)
);
    DROP TABLE public.price_list;
       public         heap    postgres    false            �           1259    25094    price_list_id_seq    SEQUENCE     �   CREATE SEQUENCE public.price_list_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.price_list_id_seq;
       public          postgres    false    416                       0    0    price_list_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.price_list_id_seq OWNED BY public.price_list.id;
          public          postgres    false    415            �           1259    25106    privatetariff    TABLE       CREATE TABLE public.privatetariff (
    id integer NOT NULL,
    tariffid character varying(100) NOT NULL,
    servicename character varying(100) NOT NULL,
    description text,
    unitcost numeric(10,2) NOT NULL,
    agreedamount numeric(10,2) NOT NULL
);
 !   DROP TABLE public.privatetariff;
       public         heap    postgres    false            �           1259    25105    privatetariff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.privatetariff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.privatetariff_id_seq;
       public          postgres    false    418                       0    0    privatetariff_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.privatetariff_id_seq OWNED BY public.privatetariff.id;
          public          postgres    false    417            �           1259    25116    progress_tracking    TABLE       CREATE TABLE public.progress_tracking (
    progresstrackingid integer NOT NULL,
    patientid integer,
    date date,
    weight numeric(6,2) DEFAULT NULL::numeric,
    bmi numeric(6,2) DEFAULT NULL::numeric,
    target_weight numeric(6,2) DEFAULT NULL::numeric,
    comments text
);
 %   DROP TABLE public.progress_tracking;
       public         heap    postgres    false            �           1259    25115 (   progress_tracking_progresstrackingid_seq    SEQUENCE     �   CREATE SEQUENCE public.progress_tracking_progresstrackingid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE public.progress_tracking_progresstrackingid_seq;
       public          postgres    false    420                       0    0 (   progress_tracking_progresstrackingid_seq    SEQUENCE OWNED BY     u   ALTER SEQUENCE public.progress_tracking_progresstrackingid_seq OWNED BY public.progress_tracking.progresstrackingid;
          public          postgres    false    419            �           1259    25128    public_holidays    TABLE     P  CREATE TABLE public.public_holidays (
    id integer NOT NULL,
    start_date character varying(50) NOT NULL,
    end_date character varying(50) NOT NULL,
    holiday_description text NOT NULL,
    status character varying(255) DEFAULT NULL::character varying,
    holiday_year character varying(255) DEFAULT NULL::character varying
);
 #   DROP TABLE public.public_holidays;
       public         heap    postgres    false            �           1259    25127    public_holidays_id_seq    SEQUENCE     �   CREATE SEQUENCE public.public_holidays_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.public_holidays_id_seq;
       public          postgres    false    422                       0    0    public_holidays_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.public_holidays_id_seq OWNED BY public.public_holidays.id;
          public          postgres    false    421            �           1259    25139    refund    TABLE     �  CREATE TABLE public.refund (
    id integer NOT NULL,
    refundid character varying(100) DEFAULT NULL::character varying,
    cashierid character varying(100) DEFAULT NULL::character varying,
    transactionid character varying(100) DEFAULT NULL::character varying,
    refunddatetime timestamp without time zone,
    customername character varying(100) DEFAULT NULL::character varying,
    refundamount numeric(10,2) DEFAULT NULL::numeric,
    reason text
);
    DROP TABLE public.refund;
       public         heap    postgres    false            �           1259    25138    refund_id_seq    SEQUENCE     �   CREATE SEQUENCE public.refund_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.refund_id_seq;
       public          postgres    false    424                       0    0    refund_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.refund_id_seq OWNED BY public.refund.id;
          public          postgres    false    423            �           1259    25153    reports_analytics    TABLE     �   CREATE TABLE public.reports_analytics (
    id integer NOT NULL,
    reportid character varying(255) NOT NULL,
    reporttype character varying(255) NOT NULL,
    datex character varying(255) NOT NULL,
    generatedby character varying(255) NOT NULL
);
 %   DROP TABLE public.reports_analytics;
       public         heap    postgres    false            �           1259    25152    reports_analytics_id_seq    SEQUENCE     �   CREATE SEQUENCE public.reports_analytics_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.reports_analytics_id_seq;
       public          postgres    false    426                        0    0    reports_analytics_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.reports_analytics_id_seq OWNED BY public.reports_analytics.id;
          public          postgres    false    425            �           1259    25162    requisition    TABLE     �  CREATE TABLE public.requisition (
    id integer NOT NULL,
    requisition_id character varying(255) DEFAULT NULL::character varying,
    requisition_date date,
    item character varying(255) DEFAULT NULL::character varying,
    item_id character varying(100) DEFAULT NULL::character varying,
    quantity character varying(255) DEFAULT NULL::character varying,
    qty_disbursed character varying(255) DEFAULT '0'::character varying,
    quantity_bal character varying(255) DEFAULT '0'::character varying,
    department character varying(255) DEFAULT NULL::character varying,
    requisition_status character varying(255) DEFAULT 'Pending'::character varying,
    requester character varying(255) DEFAULT NULL::character varying,
    branch character varying(255) DEFAULT 'IMH SPECIALIST HOSPITAL'::character varying NOT NULL,
    approved_rejected_by character varying(255) DEFAULT NULL::character varying,
    comments text,
    return_status character varying(255) DEFAULT 'false'::character varying NOT NULL,
    returned_by character varying(255) DEFAULT NULL::character varying,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.requisition;
       public         heap    postgres    false            �           1259    25161    requisition_id_seq    SEQUENCE     �   CREATE SEQUENCE public.requisition_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.requisition_id_seq;
       public          postgres    false    428            !           0    0    requisition_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.requisition_id_seq OWNED BY public.requisition.id;
          public          postgres    false    427            �           1259    25184    roles    TABLE     �   CREATE TABLE public.roles (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    status character varying(50) DEFAULT 'Active'::character varying NOT NULL
);
    DROP TABLE public.roles;
       public         heap    postgres    false            �           1259    25183    roles_id_seq    SEQUENCE     �   CREATE SEQUENCE public.roles_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public          postgres    false    430            "           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
          public          postgres    false    429            �           1259    25194    rooms    TABLE     �   CREATE TABLE public.rooms (
    room_id integer NOT NULL,
    ward_id integer NOT NULL,
    room_number character varying(10) NOT NULL,
    room_type character varying(50) NOT NULL,
    status character varying(20) NOT NULL
);
    DROP TABLE public.rooms;
       public         heap    postgres    false            �           1259    25193    rooms_room_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rooms_room_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.rooms_room_id_seq;
       public          postgres    false    432            #           0    0    rooms_room_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.rooms_room_id_seq OWNED BY public.rooms.room_id;
          public          postgres    false    431            �           1259    25201    sattfaddress    TABLE     ~  CREATE TABLE public.sattfaddress (
    id integer NOT NULL,
    staff_id character varying(100) DEFAULT NULL::character varying,
    addresstype character varying(20),
    addressdetails text,
    CONSTRAINT sattfaddress_addresstype_check CHECK (((addresstype)::text = ANY ((ARRAY['Home'::character varying, 'Mailing'::character varying, 'Office'::character varying])::text[])))
);
     DROP TABLE public.sattfaddress;
       public         heap    postgres    false            �           1259    25200    sattfaddress_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sattfaddress_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.sattfaddress_id_seq;
       public          postgres    false    434            $           0    0    sattfaddress_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.sattfaddress_id_seq OWNED BY public.sattfaddress.id;
          public          postgres    false    433            �           1259    25212 
   scheduling    TABLE       CREATE TABLE public.scheduling (
    id integer NOT NULL,
    schedule_id character varying(255) NOT NULL,
    doctor_id character varying(255) NOT NULL,
    date_and_time character varying(255) NOT NULL,
    appointment_slots character varying(255) NOT NULL
);
    DROP TABLE public.scheduling;
       public         heap    postgres    false            �           1259    25211    scheduling_id_seq    SEQUENCE     �   CREATE SEQUENCE public.scheduling_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.scheduling_id_seq;
       public          postgres    false    436            %           0    0    scheduling_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.scheduling_id_seq OWNED BY public.scheduling.id;
          public          postgres    false    435            <           1259    17068    security_access    TABLE       CREATE TABLE public.security_access (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    staff_id character varying(255) NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    role character varying(255) NOT NULL,
    status character varying(255) NOT NULL,
    department character varying(255) NOT NULL,
    branch character varying(255) NOT NULL,
    department_type character varying(100) NOT NULL,
    unit character varying(50) NOT NULL
);
 #   DROP TABLE public.security_access;
       public         heap    postgres    false            ;           1259    17067    security_access_id_seq    SEQUENCE     �   CREATE SEQUENCE public.security_access_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.security_access_id_seq;
       public          postgres    false    316            &           0    0    security_access_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.security_access_id_seq OWNED BY public.security_access.id;
          public          postgres    false    315            �           1259    25221    session_planning    TABLE       CREATE TABLE public.session_planning (
    id integer NOT NULL,
    name character varying(255) DEFAULT NULL::character varying,
    session_title character varying(255) DEFAULT NULL::character varying,
    date_time_session character varying(255) DEFAULT NULL::character varying,
    age_group character varying(255) DEFAULT NULL::character varying,
    group_size character varying(255) DEFAULT NULL::character varying,
    location_of_session character varying(255) DEFAULT NULL::character varying,
    session_objective character varying(255) DEFAULT NULL::character varying,
    priority_outcome character varying(255) DEFAULT NULL::character varying,
    brief_description character varying(255) DEFAULT NULL::character varying,
    core_program_area character varying(255) DEFAULT NULL::character varying,
    session_preparation_setup character varying(255) DEFAULT NULL::character varying,
    supplies_needed character varying(255) DEFAULT NULL::character varying,
    additional_staff_needed character varying(255) DEFAULT NULL::character varying,
    petty_cash_needed character varying(255) DEFAULT NULL::character varying,
    vehicle_needed character varying(255) DEFAULT NULL::character varying,
    project_budget_cost character varying(255) DEFAULT NULL::character varying,
    additional_resource_needed character varying(255) DEFAULT NULL::character varying,
    on_the_stop_fun character varying(255) DEFAULT NULL::character varying,
    date_submitted character varying(255) DEFAULT NULL::character varying,
    date_approved character varying(255) DEFAULT NULL::character varying,
    submitted_by character varying(255) DEFAULT NULL::character varying,
    approved_by character varying(255) DEFAULT NULL::character varying,
    token_id character varying(255) DEFAULT NULL::character varying
);
 $   DROP TABLE public.session_planning;
       public         heap    postgres    false            �           1259    25220    session_planning_id_seq    SEQUENCE     �   CREATE SEQUENCE public.session_planning_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.session_planning_id_seq;
       public          postgres    false    438            '           0    0    session_planning_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.session_planning_id_seq OWNED BY public.session_planning.id;
          public          postgres    false    437            :           1259    17022    sessions    TABLE       CREATE TABLE public.sessions (
    id character varying NOT NULL,
    user_id bigint NOT NULL,
    ip_address inet NOT NULL,
    user_agent text NOT NULL,
    payload bytea NOT NULL,
    last_activity bigint NOT NULL,
    new_column character varying(255)
);
    DROP TABLE public.sessions;
       public         heap    postgres    false            9           1259    17021    sessions_id_seq    SEQUENCE     x   CREATE SEQUENCE public.sessions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.sessions_id_seq;
       public          postgres    false    314            (           0    0    sessions_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.sessions_id_seq OWNED BY public.sessions.id;
          public          postgres    false    313            �           1259    25470    staff    TABLE     �  CREATE TABLE public.staff (
    id integer NOT NULL,
    title character varying(100) DEFAULT NULL::character varying,
    staff_id character varying(255) NOT NULL,
    first_name character varying(100) NOT NULL,
    last_name character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    marital_status character varying(255) DEFAULT NULL::character varying,
    role character varying(50) DEFAULT NULL::character varying,
    department character varying(100) DEFAULT NULL::character varying,
    unit character varying(50) DEFAULT NULL::character varying,
    address character varying(200) DEFAULT NULL::character varying,
    phone character varying(20) DEFAULT NULL::character varying,
    date_of_birth date,
    gender character varying(255) DEFAULT NULL::character varying,
    employment_date date,
    status character varying(100) DEFAULT 'Active'::character varying NOT NULL,
    supervisor character varying(100) DEFAULT NULL::character varying,
    responsibility character varying(300) DEFAULT NULL::character varying,
    state_of_origin character varying(255) DEFAULT NULL::character varying,
    lga_of_origin character varying(255) DEFAULT NULL::character varying,
    next_of_kin_name character varying(255) DEFAULT NULL::character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.staff;
       public         heap    postgres    false            �           1259    25330    staff_document    TABLE     �  CREATE TABLE public.staff_document (
    id integer NOT NULL,
    staff_id character varying(255) NOT NULL,
    fullname character varying(255) NOT NULL,
    document_id character varying(255) NOT NULL,
    document_title character varying(255) NOT NULL,
    document character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 "   DROP TABLE public.staff_document;
       public         heap    postgres    false            �           1259    25329    staff_document_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_document_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.staff_document_id_seq;
       public          postgres    false    454            )           0    0    staff_document_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.staff_document_id_seq OWNED BY public.staff_document.id;
          public          postgres    false    453            �           1259    25348    staff_financial_info    TABLE       CREATE TABLE public.staff_financial_info (
    id integer NOT NULL,
    staff_id character varying(255) NOT NULL,
    salary numeric(12,2) NOT NULL,
    pay_period character varying(255) NOT NULL,
    pay_date character varying(255) NOT NULL,
    deductions numeric(12,2) NOT NULL,
    allowances numeric(12,2) NOT NULL,
    gross_pay numeric(64,2) NOT NULL,
    net_pay numeric(12,2) NOT NULL,
    tax_rate numeric(12,2) NOT NULL,
    tax_amount numeric(12,2) NOT NULL,
    account_name character varying(255),
    bank_name character varying(255),
    account_number character varying(255),
    other_benefits character varying(255) NOT NULL,
    total_compensation character varying(255) NOT NULL,
    update_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 (   DROP TABLE public.staff_financial_info;
       public         heap    postgres    false            �           1259    25347    staff_financial_info_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_financial_info_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.staff_financial_info_id_seq;
       public          postgres    false    458            *           0    0    staff_financial_info_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.staff_financial_info_id_seq OWNED BY public.staff_financial_info.id;
          public          postgres    false    457            �           1259    25358    staff_grade_levels    TABLE     �  CREATE TABLE public.staff_grade_levels (
    id integer NOT NULL,
    grade_level character varying(50) NOT NULL,
    description text,
    min_salary numeric(10,2) NOT NULL,
    max_salary numeric(10,2) NOT NULL,
    benefits text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 &   DROP TABLE public.staff_grade_levels;
       public         heap    postgres    false            �           1259    25357    staff_grade_levels_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_grade_levels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.staff_grade_levels_id_seq;
       public          postgres    false    460            +           0    0    staff_grade_levels_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.staff_grade_levels_id_seq OWNED BY public.staff_grade_levels.id;
          public          postgres    false    459            �           1259    25369    staff_group    TABLE       CREATE TABLE public.staff_group (
    id integer NOT NULL,
    group_type character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.staff_group;
       public         heap    postgres    false            �           1259    25368    staff_group_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_group_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.staff_group_id_seq;
       public          postgres    false    462            ,           0    0    staff_group_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.staff_group_id_seq OWNED BY public.staff_group.id;
          public          postgres    false    461            �           1259    25469    staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.staff_id_seq;
       public          postgres    false    484            -           0    0    staff_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.staff_id_seq OWNED BY public.staff.id;
          public          postgres    false    483            �           1259    25378    staff_qualification    TABLE     �  CREATE TABLE public.staff_qualification (
    id integer NOT NULL,
    staff_id character varying(255) NOT NULL,
    institution_attended character varying(255) NOT NULL,
    location character varying(255) NOT NULL,
    year_of_graduation character varying(255) NOT NULL,
    certificate_obtained character varying(255) NOT NULL,
    specification character varying(255) NOT NULL,
    date_added character varying(255) NOT NULL,
    add_by character varying(255) NOT NULL
);
 '   DROP TABLE public.staff_qualification;
       public         heap    postgres    false            �           1259    25377    staff_qualification_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_qualification_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.staff_qualification_id_seq;
       public          postgres    false    464            .           0    0    staff_qualification_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.staff_qualification_id_seq OWNED BY public.staff_qualification.id;
          public          postgres    false    463            �           1259    25388    staff_referees    TABLE     �  CREATE TABLE public.staff_referees (
    id integer NOT NULL,
    staff_id character varying(255) NOT NULL,
    staff_first_name character varying(255) NOT NULL,
    staff_last_name character varying(255) NOT NULL,
    referee_id character varying(255) NOT NULL,
    relationship character varying(255) NOT NULL,
    referee_name character varying(255) NOT NULL,
    profession character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    contact_info character varying(255) NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 "   DROP TABLE public.staff_referees;
       public         heap    postgres    false            �           1259    25387    staff_referees_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_referees_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.staff_referees_id_seq;
       public          postgres    false    466            /           0    0    staff_referees_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.staff_referees_id_seq OWNED BY public.staff_referees.id;
          public          postgres    false    465            �           1259    25399    staff_suspensions    TABLE     X  CREATE TABLE public.staff_suspensions (
    id integer NOT NULL,
    staff_id character varying(255),
    name character varying(255),
    suspension_date date,
    suspension_end_date date,
    reason character varying(255),
    status character varying(255),
    suspension_type character varying(255),
    duration character varying(255)
);
 %   DROP TABLE public.staff_suspensions;
       public         heap    postgres    false            �           1259    25398    staff_suspensions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staff_suspensions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.staff_suspensions_id_seq;
       public          postgres    false    468            0           0    0    staff_suspensions_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.staff_suspensions_id_seq OWNED BY public.staff_suspensions.id;
          public          postgres    false    467            �           1259    25266    staffcategory    TABLE     �   CREATE TABLE public.staffcategory (
    id integer NOT NULL,
    categoryname character varying(255) NOT NULL,
    status character varying(255) DEFAULT 'ACTIVE'::character varying NOT NULL
);
 !   DROP TABLE public.staffcategory;
       public         heap    postgres    false            �           1259    25265    staffcategory_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffcategory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.staffcategory_id_seq;
       public          postgres    false    440            1           0    0    staffcategory_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.staffcategory_id_seq OWNED BY public.staffcategory.id;
          public          postgres    false    439            �           1259    25276    staffcompensation    TABLE       CREATE TABLE public.staffcompensation (
    id integer NOT NULL,
    staff_id character varying(100),
    salary numeric(10,2),
    paygrade character varying(10),
    currency character varying(10),
    bankaccountdetails character varying(100),
    benefits text
);
 %   DROP TABLE public.staffcompensation;
       public         heap    postgres    false            �           1259    25275    staffcompensation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffcompensation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.staffcompensation_id_seq;
       public          postgres    false    442            2           0    0    staffcompensation_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.staffcompensation_id_seq OWNED BY public.staffcompensation.id;
          public          postgres    false    441            �           1259    25285    staffcontact    TABLE     �   CREATE TABLE public.staffcontact (
    id integer NOT NULL,
    staff_id character varying(100),
    contacttype character varying(50),
    contactdetails character varying(100)
);
     DROP TABLE public.staffcontact;
       public         heap    postgres    false            �           1259    25284    staffcontact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffcontact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.staffcontact_id_seq;
       public          postgres    false    444            3           0    0    staffcontact_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.staffcontact_id_seq OWNED BY public.staffcontact.id;
          public          postgres    false    443            �           1259    25292    staffdependent    TABLE     !  CREATE TABLE public.staffdependent (
    id integer NOT NULL,
    staff_id character varying(100),
    dependentname character varying(50),
    relationship character varying(50),
    gender character varying(255) NOT NULL,
    age character varying(225) NOT NULL,
    dateofbirth date
);
 "   DROP TABLE public.staffdependent;
       public         heap    postgres    false            �           1259    25291    staffdependent_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffdependent_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.staffdependent_id_seq;
       public          postgres    false    446            4           0    0    staffdependent_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.staffdependent_id_seq OWNED BY public.staffdependent.id;
          public          postgres    false    445            �           1259    25301    staffdesignation    TABLE     +  CREATE TABLE public.staffdesignation (
    id integer NOT NULL,
    designationname character varying(255) NOT NULL,
    description text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 $   DROP TABLE public.staffdesignation;
       public         heap    postgres    false            �           1259    25300    staffdesignation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffdesignation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.staffdesignation_id_seq;
       public          postgres    false    448            5           0    0    staffdesignation_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.staffdesignation_id_seq OWNED BY public.staffdesignation.id;
          public          postgres    false    447            �           1259    25341    staffeducation    TABLE     �   CREATE TABLE public.staffeducation (
    id integer NOT NULL,
    staff_id character varying(100),
    degree character varying(100),
    institution character varying(100),
    major character varying(100),
    graduationyear integer
);
 "   DROP TABLE public.staffeducation;
       public         heap    postgres    false            �           1259    25340    staffeducation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffeducation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.staffeducation_id_seq;
       public          postgres    false    456            6           0    0    staffeducation_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.staffeducation_id_seq OWNED BY public.staffeducation.id;
          public          postgres    false    455            �           1259    25312    staffemployment    TABLE       CREATE TABLE public.staffemployment (
    id integer NOT NULL,
    staff_id character varying(100),
    "position" character varying(100),
    department character varying(100),
    manager character varying(100),
    hiredate date,
    employmentstatus character varying(20)
);
 #   DROP TABLE public.staffemployment;
       public         heap    postgres    false            �           1259    25311    staffemployment_id_seq    SEQUENCE     �   CREATE SEQUENCE public.staffemployment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.staffemployment_id_seq;
       public          postgres    false    450            7           0    0    staffemployment_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.staffemployment_id_seq OWNED BY public.staffemployment.id;
          public          postgres    false    449            �           1259    25319 
   stafftitle    TABLE     1  CREATE TABLE public.stafftitle (
    id integer NOT NULL,
    titlename character varying(255) NOT NULL,
    description character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.stafftitle;
       public         heap    postgres    false            �           1259    25318    stafftitle_id_seq    SEQUENCE     �   CREATE SEQUENCE public.stafftitle_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.stafftitle_id_seq;
       public          postgres    false    452            8           0    0    stafftitle_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.stafftitle_id_seq OWNED BY public.stafftitle.id;
          public          postgres    false    451            �           1259    25408    supplies    TABLE     �   CREATE TABLE public.supplies (
    supply_id integer NOT NULL,
    item_name character varying(100) NOT NULL,
    quantity integer NOT NULL,
    supplier character varying(255)
);
    DROP TABLE public.supplies;
       public         heap    postgres    false            �           1259    25407    supplies_supply_id_seq    SEQUENCE     �   CREATE SEQUENCE public.supplies_supply_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.supplies_supply_id_seq;
       public          postgres    false    470            9           0    0    supplies_supply_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.supplies_supply_id_seq OWNED BY public.supplies.supply_id;
          public          postgres    false    469            �           1259    25415 	   surgeries    TABLE     �   CREATE TABLE public.surgeries (
    surgery_id integer NOT NULL,
    patient_id integer NOT NULL,
    doctor_id integer NOT NULL,
    surgery_date date NOT NULL,
    surgery_name character varying(100) NOT NULL
);
    DROP TABLE public.surgeries;
       public         heap    postgres    false            �           1259    25414    surgeries_surgery_id_seq    SEQUENCE     �   CREATE SEQUENCE public.surgeries_surgery_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.surgeries_surgery_id_seq;
       public          postgres    false    472            :           0    0    surgeries_surgery_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.surgeries_surgery_id_seq OWNED BY public.surgeries.surgery_id;
          public          postgres    false    471            �           1259    25442    tbl_doctor_level    TABLE     m   CREATE TABLE public.tbl_doctor_level (
    id integer NOT NULL,
    level character varying(100) NOT NULL
);
 $   DROP TABLE public.tbl_doctor_level;
       public         heap    postgres    false            �           1259    25441    tbl_doctor_level_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbl_doctor_level_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.tbl_doctor_level_id_seq;
       public          postgres    false    478            ;           0    0    tbl_doctor_level_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.tbl_doctor_level_id_seq OWNED BY public.tbl_doctor_level.id;
          public          postgres    false    477            �           1259    25422    tbl_doctors    TABLE       CREATE TABLE public.tbl_doctors (
    id integer NOT NULL,
    doctorid character varying(100) NOT NULL,
    doctorname character varying(100) NOT NULL,
    email character varying(100),
    department character varying(100),
    phone character varying(20),
    specialty character varying(100),
    status character varying(8) NOT NULL,
    level character varying(50),
    inhouse character varying(3),
    qualification text,
    added_by character varying(100) NOT NULL,
    CONSTRAINT tbl_doctors_inhouse_check CHECK (((inhouse)::text = ANY ((ARRAY['Yes'::character varying, 'No'::character varying])::text[]))),
    CONSTRAINT tbl_doctors_status_check CHECK (((status)::text = ANY ((ARRAY['Active'::character varying, 'Inactive'::character varying])::text[])))
);
    DROP TABLE public.tbl_doctors;
       public         heap    postgres    false            �           1259    25421    tbl_doctors_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbl_doctors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.tbl_doctors_id_seq;
       public          postgres    false    474            <           0    0    tbl_doctors_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.tbl_doctors_id_seq OWNED BY public.tbl_doctors.id;
          public          postgres    false    473            �           1259    25433    tbl_doctors_specialty    TABLE     �   CREATE TABLE public.tbl_doctors_specialty (
    id integer NOT NULL,
    specialtyname character varying(100) NOT NULL,
    remarks text
);
 )   DROP TABLE public.tbl_doctors_specialty;
       public         heap    postgres    false            �           1259    25432    tbl_doctors_specialty_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbl_doctors_specialty_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.tbl_doctors_specialty_id_seq;
       public          postgres    false    476            =           0    0    tbl_doctors_specialty_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.tbl_doctors_specialty_id_seq OWNED BY public.tbl_doctors_specialty.id;
          public          postgres    false    475            �           1259    25449    tbl_expense_request    TABLE     �  CREATE TABLE public.tbl_expense_request (
    id integer NOT NULL,
    expenserequestid character varying(50),
    employeeid character varying(50) NOT NULL,
    requestdate date NOT NULL,
    expensename character varying(50),
    expensedescription text,
    amount numeric(10,2) NOT NULL,
    vendor character varying(100),
    documents character varying(255),
    status character varying(8) NOT NULL,
    approvaldate date,
    posteddate date,
    approveby character varying(255),
    review_no character varying(255),
    notes text,
    CONSTRAINT tbl_expense_request_status_check CHECK (((status)::text = ANY ((ARRAY['Pending'::character varying, 'Approved'::character varying, 'Rejected'::character varying])::text[])))
);
 '   DROP TABLE public.tbl_expense_request;
       public         heap    postgres    false            �           1259    25448    tbl_expense_request_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbl_expense_request_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.tbl_expense_request_id_seq;
       public          postgres    false    480            >           0    0    tbl_expense_request_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.tbl_expense_request_id_seq OWNED BY public.tbl_expense_request.id;
          public          postgres    false    479            �           1259    25459    tbl_familysetup    TABLE     j  CREATE TABLE public.tbl_familysetup (
    id integer NOT NULL,
    family_name character varying(100),
    home_address character varying(100),
    contact_person character varying(100),
    familysetup_type character varying(100),
    contact_person_phone character varying(100),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 #   DROP TABLE public.tbl_familysetup;
       public         heap    postgres    false            �           1259    25458    tbl_familysetup_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tbl_familysetup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tbl_familysetup_id_seq;
       public          postgres    false    482            ?           0    0    tbl_familysetup_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tbl_familysetup_id_seq OWNED BY public.tbl_familysetup.id;
          public          postgres    false    481            0           1259    16943    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            /           1259    16942    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    304            @           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    303            �           2604    16431    accountspayable id    DEFAULT     x   ALTER TABLE ONLY public.accountspayable ALTER COLUMN id SET DEFAULT nextval('public.accountspayable_id_seq'::regclass);
 A   ALTER TABLE public.accountspayable ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �           2604    16442    accountsreceivable id    DEFAULT     ~   ALTER TABLE ONLY public.accountsreceivable ALTER COLUMN id SET DEFAULT nextval('public.accountsreceivable_id_seq'::regclass);
 D   ALTER TABLE public.accountsreceivable ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            �           2604    16454    ambulance_booking id    DEFAULT     |   ALTER TABLE ONLY public.ambulance_booking ALTER COLUMN id SET DEFAULT nextval('public.ambulance_booking_id_seq'::regclass);
 C   ALTER TABLE public.ambulance_booking ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            �           2604    16476    ambulance_service id    DEFAULT     |   ALTER TABLE ONLY public.ambulance_service ALTER COLUMN id SET DEFAULT nextval('public.ambulance_service_id_seq'::regclass);
 C   ALTER TABLE public.ambulance_service ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221    222            �           2604    16485    ambulance_table id    DEFAULT     x   ALTER TABLE ONLY public.ambulance_table ALTER COLUMN id SET DEFAULT nextval('public.ambulance_table_id_seq'::regclass);
 A   ALTER TABLE public.ambulance_table ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            �           2604    16495    appointment id    DEFAULT     p   ALTER TABLE ONLY public.appointment ALTER COLUMN id SET DEFAULT nextval('public.appointment_id_seq'::regclass);
 =   ALTER TABLE public.appointment ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    225    226            �           2604    16508    attendance id    DEFAULT     n   ALTER TABLE ONLY public.attendance ALTER COLUMN id SET DEFAULT nextval('public.attendance_id_seq'::regclass);
 <   ALTER TABLE public.attendance ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    228    228            �           2604    16516    bed id    DEFAULT     `   ALTER TABLE ONLY public.bed ALTER COLUMN id SET DEFAULT nextval('public.bed_id_seq'::regclass);
 5   ALTER TABLE public.bed ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    229    230            �           2604    16523    bedcategory id    DEFAULT     p   ALTER TABLE ONLY public.bedcategory ALTER COLUMN id SET DEFAULT nextval('public.bedcategory_id_seq'::regclass);
 =   ALTER TABLE public.bedcategory ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    232    232            �           2604    16551    bill_item item_id    DEFAULT     v   ALTER TABLE ONLY public.bill_item ALTER COLUMN item_id SET DEFAULT nextval('public.bill_item_item_id_seq'::regclass);
 @   ALTER TABLE public.bill_item ALTER COLUMN item_id DROP DEFAULT;
       public          postgres    false    238    237    238            �           2604    16560    bill_log id    DEFAULT     j   ALTER TABLE ONLY public.bill_log ALTER COLUMN id SET DEFAULT nextval('public.bill_log_id_seq'::regclass);
 :   ALTER TABLE public.bill_log ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    240    239    240            �           2604    16569    bill_payment_log id    DEFAULT     z   ALTER TABLE ONLY public.bill_payment_log ALTER COLUMN id SET DEFAULT nextval('public.bill_payment_log_id_seq'::regclass);
 B   ALTER TABLE public.bill_payment_log ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    241    242            �           2604    16532 
   billing id    DEFAULT     h   ALTER TABLE ONLY public.billing ALTER COLUMN id SET DEFAULT nextval('public.billing_id_seq'::regclass);
 9   ALTER TABLE public.billing ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    234    234            �           2604    16541    billing_information id    DEFAULT     �   ALTER TABLE ONLY public.billing_information ALTER COLUMN id SET DEFAULT nextval('public.billing_information_id_seq'::regclass);
 E   ALTER TABLE public.billing_information ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    236    236            �           2604    16578    blood_collection_table id    DEFAULT     �   ALTER TABLE ONLY public.blood_collection_table ALTER COLUMN id SET DEFAULT nextval('public.blood_collection_table_id_seq'::regclass);
 H   ALTER TABLE public.blood_collection_table ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    244    243    244            �           2604    16587    blood_inventory_table id    DEFAULT     �   ALTER TABLE ONLY public.blood_inventory_table ALTER COLUMN id SET DEFAULT nextval('public.blood_inventory_table_id_seq'::regclass);
 G   ALTER TABLE public.blood_inventory_table ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    246    245    246            �           2604    16598 	   branch id    DEFAULT     f   ALTER TABLE ONLY public.branch ALTER COLUMN id SET DEFAULT nextval('public.branch_id_seq'::regclass);
 8   ALTER TABLE public.branch ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    248    248            �           2604    16615    case_log id    DEFAULT     j   ALTER TABLE ONLY public.case_log ALTER COLUMN id SET DEFAULT nextval('public.case_log_id_seq'::regclass);
 :   ALTER TABLE public.case_log ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    250    249    250            �           2604    16625    cashiersales id    DEFAULT     r   ALTER TABLE ONLY public.cashiersales ALTER COLUMN id SET DEFAULT nextval('public.cashiersales_id_seq'::regclass);
 >   ALTER TABLE public.cashiersales ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    252    251    252            �           2604    16634    cashiershift id    DEFAULT     r   ALTER TABLE ONLY public.cashiershift ALTER COLUMN id SET DEFAULT nextval('public.cashiershift_id_seq'::regclass);
 >   ALTER TABLE public.cashiershift ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    253    254    254            �           2604    16641    cashiertransactionslog id    DEFAULT     �   ALTER TABLE ONLY public.cashiertransactionslog ALTER COLUMN id SET DEFAULT nextval('public.cashiertransactionslog_id_seq'::regclass);
 H   ALTER TABLE public.cashiertransactionslog ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    256    256            �           2604    16650    cashregister id    DEFAULT     r   ALTER TABLE ONLY public.cashregister ALTER COLUMN id SET DEFAULT nextval('public.cashregister_id_seq'::regclass);
 >   ALTER TABLE public.cashregister ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    257    258    258            �           2604    16659    cashtransactions id    DEFAULT     z   ALTER TABLE ONLY public.cashtransactions ALTER COLUMN id SET DEFAULT nextval('public.cashtransactions_id_seq'::regclass);
 B   ALTER TABLE public.cashtransactions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    260    259    260            �           2604    16669    centralstore id    DEFAULT     r   ALTER TABLE ONLY public.centralstore ALTER COLUMN id SET DEFAULT nextval('public.centralstore_id_seq'::regclass);
 >   ALTER TABLE public.centralstore ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    261    262    262            �           2604    16678    chart_of_account id    DEFAULT     z   ALTER TABLE ONLY public.chart_of_account ALTER COLUMN id SET DEFAULT nextval('public.chart_of_account_id_seq'::regclass);
 B   ALTER TABLE public.chart_of_account ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    264    263    264            �           2604    16685 .   confirmation_appraisal confirmationappraisalid    DEFAULT     �   ALTER TABLE ONLY public.confirmation_appraisal ALTER COLUMN confirmationappraisalid SET DEFAULT nextval('public.confirmation_appraisal_confirmationappraisalid_seq'::regclass);
 ]   ALTER TABLE public.confirmation_appraisal ALTER COLUMN confirmationappraisalid DROP DEFAULT;
       public          postgres    false    266    265    266            �           2604    16695    corporate_insurance id    DEFAULT     �   ALTER TABLE ONLY public.corporate_insurance ALTER COLUMN id SET DEFAULT nextval('public.corporate_insurance_id_seq'::regclass);
 E   ALTER TABLE public.corporate_insurance ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    267    268    268            �           2604    16705     corporate_insurance_specialty id    DEFAULT     �   ALTER TABLE ONLY public.corporate_insurance_specialty ALTER COLUMN id SET DEFAULT nextval('public.corporate_insurance_specialty_id_seq'::regclass);
 O   ALTER TABLE public.corporate_insurance_specialty ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    270    269    270            �           2604    16715    corpsedeposit id    DEFAULT     t   ALTER TABLE ONLY public.corpsedeposit ALTER COLUMN id SET DEFAULT nextval('public.corpsedeposit_id_seq'::regclass);
 ?   ALTER TABLE public.corpsedeposit ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    271    272    272            �           2604    16727    departmentgroup id    DEFAULT     x   ALTER TABLE ONLY public.departmentgroup ALTER COLUMN id SET DEFAULT nextval('public.departmentgroup_id_seq'::regclass);
 A   ALTER TABLE public.departmentgroup ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    274    273    274            �           2604    16734    departmentgrouptype id    DEFAULT     �   ALTER TABLE ONLY public.departmentgrouptype ALTER COLUMN id SET DEFAULT nextval('public.departmentgrouptype_id_seq'::regclass);
 E   ALTER TABLE public.departmentgrouptype ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    275    276    276            �           2604    16741    designation id    DEFAULT     p   ALTER TABLE ONLY public.designation ALTER COLUMN id SET DEFAULT nextval('public.designation_id_seq'::regclass);
 =   ALTER TABLE public.designation ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    277    278    278            �           2604    16769    diet_plan dietplanid    DEFAULT     |   ALTER TABLE ONLY public.diet_plan ALTER COLUMN dietplanid SET DEFAULT nextval('public.diet_plan_dietplanid_seq'::regclass);
 C   ALTER TABLE public.diet_plan ALTER COLUMN dietplanid DROP DEFAULT;
       public          postgres    false    284    283    284            �           2604    16750 &   dietary_assessment dietaryassessmentid    DEFAULT     �   ALTER TABLE ONLY public.dietary_assessment ALTER COLUMN dietaryassessmentid SET DEFAULT nextval('public.dietary_assessment_dietaryassessmentid_seq'::regclass);
 U   ALTER TABLE public.dietary_assessment ALTER COLUMN dietaryassessmentid DROP DEFAULT;
       public          postgres    false    280    279    280            �           2604    16761 $   dietician_appointments appointmentid    DEFAULT     �   ALTER TABLE ONLY public.dietician_appointments ALTER COLUMN appointmentid SET DEFAULT nextval('public.dietician_appointments_appointmentid_seq'::regclass);
 S   ALTER TABLE public.dietician_appointments ALTER COLUMN appointmentid DROP DEFAULT;
       public          postgres    false    282    281    282                        2604    16780    dismissed_staff id    DEFAULT     x   ALTER TABLE ONLY public.dismissed_staff ALTER COLUMN id SET DEFAULT nextval('public.dismissed_staff_id_seq'::regclass);
 A   ALTER TABLE public.dismissed_staff ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    286    285    286                       2604    16792    dispensations id    DEFAULT     t   ALTER TABLE ONLY public.dispensations ALTER COLUMN id SET DEFAULT nextval('public.dispensations_id_seq'::regclass);
 ?   ALTER TABLE public.dispensations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    288    287    288                       2604    16801 
   doctors id    DEFAULT     h   ALTER TABLE ONLY public.doctors ALTER COLUMN id SET DEFAULT nextval('public.doctors_id_seq'::regclass);
 9   ALTER TABLE public.doctors ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    290    289    290                       2604    16811    donor_table id    DEFAULT     p   ALTER TABLE ONLY public.donor_table ALTER COLUMN id SET DEFAULT nextval('public.donor_table_id_seq'::regclass);
 =   ALTER TABLE public.donor_table ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    292    291    292                       2604    16820    drugs drugid    DEFAULT     l   ALTER TABLE ONLY public.drugs ALTER COLUMN drugid SET DEFAULT nextval('public.drugs_drugid_seq'::regclass);
 ;   ALTER TABLE public.drugs ALTER COLUMN drugid DROP DEFAULT;
       public          postgres    false    294    293    294                       2604    16829    embalming embalming_id    DEFAULT     �   ALTER TABLE ONLY public.embalming ALTER COLUMN embalming_id SET DEFAULT nextval('public.embalming_embalming_id_seq'::regclass);
 E   ALTER TABLE public.embalming ALTER COLUMN embalming_id DROP DEFAULT;
       public          postgres    false    295    296    296            	           2604    16838    emergency_contacts id    DEFAULT     ~   ALTER TABLE ONLY public.emergency_contacts ALTER COLUMN id SET DEFAULT nextval('public.emergency_contacts_id_seq'::regclass);
 D   ALTER TABLE public.emergency_contacts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    297    298    298            
           2604    16847    employees id    DEFAULT     l   ALTER TABLE ONLY public.employees ALTER COLUMN id SET DEFAULT nextval('public.employees_id_seq'::regclass);
 ;   ALTER TABLE public.employees ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    299    300    300                       2604    24614    equipment equipment_id    DEFAULT     �   ALTER TABLE ONLY public.equipment ALTER COLUMN equipment_id SET DEFAULT nextval('public.equipment_equipment_id_seq'::regclass);
 E   ALTER TABLE public.equipment ALTER COLUMN equipment_id DROP DEFAULT;
       public          postgres    false    317    318    318                       2604    24623    error_logger id    DEFAULT     r   ALTER TABLE ONLY public.error_logger ALTER COLUMN id SET DEFAULT nextval('public.error_logger_id_seq'::regclass);
 >   ALTER TABLE public.error_logger ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    320    319    320                       2604    17004    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    311    312    312                       2604    24633    feedback_surveys id    DEFAULT     z   ALTER TABLE ONLY public.feedback_surveys ALTER COLUMN id SET DEFAULT nextval('public.feedback_surveys_id_seq'::regclass);
 B   ALTER TABLE public.feedback_surveys ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    322    321    322                       2604    24642    financialreports id    DEFAULT     z   ALTER TABLE ONLY public.financialreports ALTER COLUMN id SET DEFAULT nextval('public.financialreports_id_seq'::regclass);
 B   ALTER TABLE public.financialreports ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    324    323    324                       2604    24665    food_item fooditemid    DEFAULT     |   ALTER TABLE ONLY public.food_item ALTER COLUMN fooditemid SET DEFAULT nextval('public.food_item_fooditemid_seq'::regclass);
 C   ALTER TABLE public.food_item ALTER COLUMN fooditemid DROP DEFAULT;
       public          postgres    false    326    325    326            #           2604    24678    generalledger id    DEFAULT     t   ALTER TABLE ONLY public.generalledger ALTER COLUMN id SET DEFAULT nextval('public.generalledger_id_seq'::regclass);
 ?   ALTER TABLE public.generalledger ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    328    327    328            &           2604    24688    incident_report id    DEFAULT     x   ALTER TABLE ONLY public.incident_report ALTER COLUMN id SET DEFAULT nextval('public.incident_report_id_seq'::regclass);
 A   ALTER TABLE public.incident_report ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    330    329    330            (           2604    24698    inpatient id    DEFAULT     l   ALTER TABLE ONLY public.inpatient ALTER COLUMN id SET DEFAULT nextval('public.inpatient_id_seq'::regclass);
 ;   ALTER TABLE public.inpatient ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    332    331    332            -           2604    24712    insurance id    DEFAULT     l   ALTER TABLE ONLY public.insurance ALTER COLUMN id SET DEFAULT nextval('public.insurance_id_seq'::regclass);
 ;   ALTER TABLE public.insurance ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    333    334    334            .           2604    24719    investigations id    DEFAULT     v   ALTER TABLE ONLY public.investigations ALTER COLUMN id SET DEFAULT nextval('public.investigations_id_seq'::regclass);
 @   ALTER TABLE public.investigations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    335    336    336            /           2604    24728    item id    DEFAULT     b   ALTER TABLE ONLY public.item ALTER COLUMN id SET DEFAULT nextval('public.item_id_seq'::regclass);
 6   ALTER TABLE public.item ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    338    337    338            3           2604    24754    item_group id    DEFAULT     n   ALTER TABLE ONLY public.item_group ALTER COLUMN id SET DEFAULT nextval('public.item_group_id_seq'::regclass);
 <   ALTER TABLE public.item_group ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    343    344    344            1           2604    24738    itemcategory id    DEFAULT     r   ALTER TABLE ONLY public.itemcategory ALTER COLUMN id SET DEFAULT nextval('public.itemcategory_id_seq'::regclass);
 >   ALTER TABLE public.itemcategory ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    339    340    340            2           2604    24747    itemsubgroup id    DEFAULT     r   ALTER TABLE ONLY public.itemsubgroup ALTER COLUMN id SET DEFAULT nextval('public.itemsubgroup_id_seq'::regclass);
 >   ALTER TABLE public.itemsubgroup ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    341    342    342            5           2604    24772    job_applications id    DEFAULT     z   ALTER TABLE ONLY public.job_applications ALTER COLUMN id SET DEFAULT nextval('public.job_applications_id_seq'::regclass);
 B   ALTER TABLE public.job_applications ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    348    347    348                       2604    16987    jobs id    DEFAULT     b   ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);
 6   ALTER TABLE public.jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    309    308    309            4           2604    24763    laboratory_tests id    DEFAULT     z   ALTER TABLE ONLY public.laboratory_tests ALTER COLUMN id SET DEFAULT nextval('public.laboratory_tests_id_seq'::regclass);
 B   ALTER TABLE public.laboratory_tests ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    345    346    346            7           2604    24783    labradiology id    DEFAULT     r   ALTER TABLE ONLY public.labradiology ALTER COLUMN id SET DEFAULT nextval('public.labradiology_id_seq'::regclass);
 >   ALTER TABLE public.labradiology ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    349    350    350            9           2604    24802    leave_entitlement id    DEFAULT     |   ALTER TABLE ONLY public.leave_entitlement ALTER COLUMN id SET DEFAULT nextval('public.leave_entitlement_id_seq'::regclass);
 C   ALTER TABLE public.leave_entitlement ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    353    354    354            <           2604    24811    leave_type id    DEFAULT     n   ALTER TABLE ONLY public.leave_type ALTER COLUMN id SET DEFAULT nextval('public.leave_type_id_seq'::regclass);
 <   ALTER TABLE public.leave_type ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    355    356    356            8           2604    24794    leaverequests id    DEFAULT     t   ALTER TABLE ONLY public.leaverequests ALTER COLUMN id SET DEFAULT nextval('public.leaverequests_id_seq'::regclass);
 ?   ALTER TABLE public.leaverequests ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    352    351    352            ?           2604    24820    meal_schedule mealscheduleid    DEFAULT     �   ALTER TABLE ONLY public.meal_schedule ALTER COLUMN mealscheduleid SET DEFAULT nextval('public.meal_schedule_mealscheduleid_seq'::regclass);
 K   ALTER TABLE public.meal_schedule ALTER COLUMN mealscheduleid DROP DEFAULT;
       public          postgres    false    357    358    358            A           2604    24828    medical_records record_id    DEFAULT     �   ALTER TABLE ONLY public.medical_records ALTER COLUMN record_id SET DEFAULT nextval('public.medical_records_record_id_seq'::regclass);
 H   ALTER TABLE public.medical_records ALTER COLUMN record_id DROP DEFAULT;
       public          postgres    false    359    360    360            B           2604    24837    medication id    DEFAULT     n   ALTER TABLE ONLY public.medication ALTER COLUMN id SET DEFAULT nextval('public.medication_id_seq'::regclass);
 <   ALTER TABLE public.medication ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    361    362    362            C           2604    24846    medication_categories id    DEFAULT     �   ALTER TABLE ONLY public.medication_categories ALTER COLUMN id SET DEFAULT nextval('public.medication_categories_id_seq'::regclass);
 G   ALTER TABLE public.medication_categories ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    363    364    364            D           2604    24855    medication_inventory id    DEFAULT     �   ALTER TABLE ONLY public.medication_inventory ALTER COLUMN id SET DEFAULT nextval('public.medication_inventory_id_seq'::regclass);
 F   ALTER TABLE public.medication_inventory ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    366    365    366            E           2604    24864    mews_vitals mews_id    DEFAULT     z   ALTER TABLE ONLY public.mews_vitals ALTER COLUMN mews_id SET DEFAULT nextval('public.mews_vitals_mews_id_seq'::regclass);
 B   ALTER TABLE public.mews_vitals ALTER COLUMN mews_id DROP DEFAULT;
       public          postgres    false    368    367    368                       2604    16939    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    302    301    302            F           2604    24871    mortuary id    DEFAULT     j   ALTER TABLE ONLY public.mortuary ALTER COLUMN id SET DEFAULT nextval('public.mortuary_id_seq'::regclass);
 :   ALTER TABLE public.mortuary ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    370    369    370            J           2604    24891    mortuary_bill bill_id    DEFAULT     ~   ALTER TABLE ONLY public.mortuary_bill ALTER COLUMN bill_id SET DEFAULT nextval('public.mortuary_bill_bill_id_seq'::regclass);
 D   ALTER TABLE public.mortuary_bill ALTER COLUMN bill_id DROP DEFAULT;
       public          postgres    false    374    373    374            L           2604    24901    mortuary_daily_tasks task_id    DEFAULT     �   ALTER TABLE ONLY public.mortuary_daily_tasks ALTER COLUMN task_id SET DEFAULT nextval('public.mortuary_daily_tasks_task_id_seq'::regclass);
 K   ALTER TABLE public.mortuary_daily_tasks ALTER COLUMN task_id DROP DEFAULT;
       public          postgres    false    376    375    376            M           2604    24910    mortuary_service id    DEFAULT     z   ALTER TABLE ONLY public.mortuary_service ALTER COLUMN id SET DEFAULT nextval('public.mortuary_service_id_seq'::regclass);
 B   ALTER TABLE public.mortuary_service ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    378    377    378            G           2604    24880    mortuarymaterials id    DEFAULT     |   ALTER TABLE ONLY public.mortuarymaterials ALTER COLUMN id SET DEFAULT nextval('public.mortuarymaterials_id_seq'::regclass);
 C   ALTER TABLE public.mortuarymaterials ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    371    372    372            P           2604    24921    notes note_id    DEFAULT     n   ALTER TABLE ONLY public.notes ALTER COLUMN note_id SET DEFAULT nextval('public.notes_note_id_seq'::regclass);
 <   ALTER TABLE public.notes ALTER COLUMN note_id DROP DEFAULT;
       public          postgres    false    379    380    380            Q           2604    24930    notifications_alerts id    DEFAULT     �   ALTER TABLE ONLY public.notifications_alerts ALTER COLUMN id SET DEFAULT nextval('public.notifications_alerts_id_seq'::regclass);
 F   ALTER TABLE public.notifications_alerts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    382    381    382            S           2604    24940 	   nurses id    DEFAULT     f   ALTER TABLE ONLY public.nurses ALTER COLUMN id SET DEFAULT nextval('public.nurses_id_seq'::regclass);
 8   ALTER TABLE public.nurses ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    384    383    384            T           2604    24950    nutrition_log nutritionlogid    DEFAULT     �   ALTER TABLE ONLY public.nutrition_log ALTER COLUMN nutritionlogid SET DEFAULT nextval('public.nutrition_log_nutritionlogid_seq'::regclass);
 K   ALTER TABLE public.nutrition_log ALTER COLUMN nutritionlogid DROP DEFAULT;
       public          postgres    false    385    386    386            U           2604    24959    ophthalmology_vitals vital_id    DEFAULT     �   ALTER TABLE ONLY public.ophthalmology_vitals ALTER COLUMN vital_id SET DEFAULT nextval('public.ophthalmology_vitals_vital_id_seq'::regclass);
 L   ALTER TABLE public.ophthalmology_vitals ALTER COLUMN vital_id DROP DEFAULT;
       public          postgres    false    387    388    388            V           2604    24968 -   optometry_subjective_refraction refraction_id    DEFAULT     �   ALTER TABLE ONLY public.optometry_subjective_refraction ALTER COLUMN refraction_id SET DEFAULT nextval('public.optometry_subjective_refraction_refraction_id_seq'::regclass);
 \   ALTER TABLE public.optometry_subjective_refraction ALTER COLUMN refraction_id DROP DEFAULT;
       public          postgres    false    389    390    390            W           2604    24977    outpatient id    DEFAULT     n   ALTER TABLE ONLY public.outpatient ALTER COLUMN id SET DEFAULT nextval('public.outpatient_id_seq'::regclass);
 <   ALTER TABLE public.outpatient ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    391    392    392            X           2604    24987 
   package id    DEFAULT     h   ALTER TABLE ONLY public.package ALTER COLUMN id SET DEFAULT nextval('public.package_id_seq'::regclass);
 9   ALTER TABLE public.package ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    394    393    394            Z           2604    25005 :   patient_dietary_preferences patient_dietary_preferences_id    DEFAULT     �   ALTER TABLE ONLY public.patient_dietary_preferences ALTER COLUMN patient_dietary_preferences_id SET DEFAULT nextval('public.patient_dietary_preferences_patient_dietary_preferences_id_seq'::regclass);
 i   ALTER TABLE public.patient_dietary_preferences ALTER COLUMN patient_dietary_preferences_id DROP DEFAULT;
       public          postgres    false    397    398    398            [           2604    25014    patient_document id    DEFAULT     z   ALTER TABLE ONLY public.patient_document ALTER COLUMN id SET DEFAULT nextval('public.patient_document_id_seq'::regclass);
 B   ALTER TABLE public.patient_document ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    399    400    400            ]           2604    25024    patient_medical_history id    DEFAULT     �   ALTER TABLE ONLY public.patient_medical_history ALTER COLUMN id SET DEFAULT nextval('public.patient_medical_history_id_seq'::regclass);
 I   ALTER TABLE public.patient_medical_history ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    402    401    402            Y           2604    24996    patientownmedication id    DEFAULT     �   ALTER TABLE ONLY public.patientownmedication ALTER COLUMN id SET DEFAULT nextval('public.patientownmedication_id_seq'::regclass);
 F   ALTER TABLE public.patientownmedication ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    396    395    396            ^           2604    25033 
   payroll id    DEFAULT     h   ALTER TABLE ONLY public.payroll ALTER COLUMN id SET DEFAULT nextval('public.payroll_id_seq'::regclass);
 9   ALTER TABLE public.payroll ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    403    404    404            b           2604    25045    payroll_log id    DEFAULT     p   ALTER TABLE ONLY public.payroll_log ALTER COLUMN id SET DEFAULT nextval('public.payroll_log_id_seq'::regclass);
 =   ALTER TABLE public.payroll_log ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    406    405    406            e           2604    25056    personal_requests id    DEFAULT     |   ALTER TABLE ONLY public.personal_requests ALTER COLUMN id SET DEFAULT nextval('public.personal_requests_id_seq'::regclass);
 C   ALTER TABLE public.personal_requests ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    408    407    408            h           2604    25067    pharmacy id    DEFAULT     j   ALTER TABLE ONLY public.pharmacy ALTER COLUMN id SET DEFAULT nextval('public.pharmacy_id_seq'::regclass);
 :   ALTER TABLE public.pharmacy ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    409    410    410            i           2604    25076    pharmacy_inventory id    DEFAULT     ~   ALTER TABLE ONLY public.pharmacy_inventory ALTER COLUMN id SET DEFAULT nextval('public.pharmacy_inventory_id_seq'::regclass);
 D   ALTER TABLE public.pharmacy_inventory ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    412    411    412            k           2604    25086    prescriptions id    DEFAULT     t   ALTER TABLE ONLY public.prescriptions ALTER COLUMN id SET DEFAULT nextval('public.prescriptions_id_seq'::regclass);
 ?   ALTER TABLE public.prescriptions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    413    414    414            o           2604    25098    price_list id    DEFAULT     n   ALTER TABLE ONLY public.price_list ALTER COLUMN id SET DEFAULT nextval('public.price_list_id_seq'::regclass);
 <   ALTER TABLE public.price_list ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    415    416    416            r           2604    25109    privatetariff id    DEFAULT     t   ALTER TABLE ONLY public.privatetariff ALTER COLUMN id SET DEFAULT nextval('public.privatetariff_id_seq'::regclass);
 ?   ALTER TABLE public.privatetariff ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    418    417    418            s           2604    25119 $   progress_tracking progresstrackingid    DEFAULT     �   ALTER TABLE ONLY public.progress_tracking ALTER COLUMN progresstrackingid SET DEFAULT nextval('public.progress_tracking_progresstrackingid_seq'::regclass);
 S   ALTER TABLE public.progress_tracking ALTER COLUMN progresstrackingid DROP DEFAULT;
       public          postgres    false    420    419    420            w           2604    25131    public_holidays id    DEFAULT     x   ALTER TABLE ONLY public.public_holidays ALTER COLUMN id SET DEFAULT nextval('public.public_holidays_id_seq'::regclass);
 A   ALTER TABLE public.public_holidays ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    421    422    422            z           2604    25142 	   refund id    DEFAULT     f   ALTER TABLE ONLY public.refund ALTER COLUMN id SET DEFAULT nextval('public.refund_id_seq'::regclass);
 8   ALTER TABLE public.refund ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    424    423    424            �           2604    25156    reports_analytics id    DEFAULT     |   ALTER TABLE ONLY public.reports_analytics ALTER COLUMN id SET DEFAULT nextval('public.reports_analytics_id_seq'::regclass);
 C   ALTER TABLE public.reports_analytics ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    425    426    426            �           2604    25165    requisition id    DEFAULT     p   ALTER TABLE ONLY public.requisition ALTER COLUMN id SET DEFAULT nextval('public.requisition_id_seq'::regclass);
 =   ALTER TABLE public.requisition ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    427    428    428            �           2604    25187    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    429    430    430            �           2604    25197    rooms room_id    DEFAULT     n   ALTER TABLE ONLY public.rooms ALTER COLUMN room_id SET DEFAULT nextval('public.rooms_room_id_seq'::regclass);
 <   ALTER TABLE public.rooms ALTER COLUMN room_id DROP DEFAULT;
       public          postgres    false    432    431    432            �           2604    25204    sattfaddress id    DEFAULT     r   ALTER TABLE ONLY public.sattfaddress ALTER COLUMN id SET DEFAULT nextval('public.sattfaddress_id_seq'::regclass);
 >   ALTER TABLE public.sattfaddress ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    433    434    434            �           2604    25215    scheduling id    DEFAULT     n   ALTER TABLE ONLY public.scheduling ALTER COLUMN id SET DEFAULT nextval('public.scheduling_id_seq'::regclass);
 <   ALTER TABLE public.scheduling ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    436    435    436                       2604    17071    security_access id    DEFAULT     x   ALTER TABLE ONLY public.security_access ALTER COLUMN id SET DEFAULT nextval('public.security_access_id_seq'::regclass);
 A   ALTER TABLE public.security_access ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    316    315    316            �           2604    25224    session_planning id    DEFAULT     z   ALTER TABLE ONLY public.session_planning ALTER COLUMN id SET DEFAULT nextval('public.session_planning_id_seq'::regclass);
 B   ALTER TABLE public.session_planning ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    437    438    438                       2604    17040    sessions id    DEFAULT     j   ALTER TABLE ONLY public.sessions ALTER COLUMN id SET DEFAULT nextval('public.sessions_id_seq'::regclass);
 :   ALTER TABLE public.sessions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    314    313    314            �           2604    25473    staff id    DEFAULT     d   ALTER TABLE ONLY public.staff ALTER COLUMN id SET DEFAULT nextval('public.staff_id_seq'::regclass);
 7   ALTER TABLE public.staff ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    483    484    484            �           2604    25333    staff_document id    DEFAULT     v   ALTER TABLE ONLY public.staff_document ALTER COLUMN id SET DEFAULT nextval('public.staff_document_id_seq'::regclass);
 @   ALTER TABLE public.staff_document ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    453    454    454            �           2604    25351    staff_financial_info id    DEFAULT     �   ALTER TABLE ONLY public.staff_financial_info ALTER COLUMN id SET DEFAULT nextval('public.staff_financial_info_id_seq'::regclass);
 F   ALTER TABLE public.staff_financial_info ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    458    457    458            �           2604    25361    staff_grade_levels id    DEFAULT     ~   ALTER TABLE ONLY public.staff_grade_levels ALTER COLUMN id SET DEFAULT nextval('public.staff_grade_levels_id_seq'::regclass);
 D   ALTER TABLE public.staff_grade_levels ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    460    459    460            �           2604    25372    staff_group id    DEFAULT     p   ALTER TABLE ONLY public.staff_group ALTER COLUMN id SET DEFAULT nextval('public.staff_group_id_seq'::regclass);
 =   ALTER TABLE public.staff_group ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    462    461    462            �           2604    25381    staff_qualification id    DEFAULT     �   ALTER TABLE ONLY public.staff_qualification ALTER COLUMN id SET DEFAULT nextval('public.staff_qualification_id_seq'::regclass);
 E   ALTER TABLE public.staff_qualification ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    464    463    464            �           2604    25391    staff_referees id    DEFAULT     v   ALTER TABLE ONLY public.staff_referees ALTER COLUMN id SET DEFAULT nextval('public.staff_referees_id_seq'::regclass);
 @   ALTER TABLE public.staff_referees ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    466    465    466            �           2604    25402    staff_suspensions id    DEFAULT     |   ALTER TABLE ONLY public.staff_suspensions ALTER COLUMN id SET DEFAULT nextval('public.staff_suspensions_id_seq'::regclass);
 C   ALTER TABLE public.staff_suspensions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    467    468    468            �           2604    25269    staffcategory id    DEFAULT     t   ALTER TABLE ONLY public.staffcategory ALTER COLUMN id SET DEFAULT nextval('public.staffcategory_id_seq'::regclass);
 ?   ALTER TABLE public.staffcategory ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    440    439    440            �           2604    25279    staffcompensation id    DEFAULT     |   ALTER TABLE ONLY public.staffcompensation ALTER COLUMN id SET DEFAULT nextval('public.staffcompensation_id_seq'::regclass);
 C   ALTER TABLE public.staffcompensation ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    442    441    442            �           2604    25288    staffcontact id    DEFAULT     r   ALTER TABLE ONLY public.staffcontact ALTER COLUMN id SET DEFAULT nextval('public.staffcontact_id_seq'::regclass);
 >   ALTER TABLE public.staffcontact ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    444    443    444            �           2604    25295    staffdependent id    DEFAULT     v   ALTER TABLE ONLY public.staffdependent ALTER COLUMN id SET DEFAULT nextval('public.staffdependent_id_seq'::regclass);
 @   ALTER TABLE public.staffdependent ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    445    446    446            �           2604    25304    staffdesignation id    DEFAULT     z   ALTER TABLE ONLY public.staffdesignation ALTER COLUMN id SET DEFAULT nextval('public.staffdesignation_id_seq'::regclass);
 B   ALTER TABLE public.staffdesignation ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    448    447    448            �           2604    25344    staffeducation id    DEFAULT     v   ALTER TABLE ONLY public.staffeducation ALTER COLUMN id SET DEFAULT nextval('public.staffeducation_id_seq'::regclass);
 @   ALTER TABLE public.staffeducation ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    456    455    456            �           2604    25315    staffemployment id    DEFAULT     x   ALTER TABLE ONLY public.staffemployment ALTER COLUMN id SET DEFAULT nextval('public.staffemployment_id_seq'::regclass);
 A   ALTER TABLE public.staffemployment ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    450    449    450            �           2604    25322    stafftitle id    DEFAULT     n   ALTER TABLE ONLY public.stafftitle ALTER COLUMN id SET DEFAULT nextval('public.stafftitle_id_seq'::regclass);
 <   ALTER TABLE public.stafftitle ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    451    452    452            �           2604    25411    supplies supply_id    DEFAULT     x   ALTER TABLE ONLY public.supplies ALTER COLUMN supply_id SET DEFAULT nextval('public.supplies_supply_id_seq'::regclass);
 A   ALTER TABLE public.supplies ALTER COLUMN supply_id DROP DEFAULT;
       public          postgres    false    470    469    470            �           2604    25418    surgeries surgery_id    DEFAULT     |   ALTER TABLE ONLY public.surgeries ALTER COLUMN surgery_id SET DEFAULT nextval('public.surgeries_surgery_id_seq'::regclass);
 C   ALTER TABLE public.surgeries ALTER COLUMN surgery_id DROP DEFAULT;
       public          postgres    false    472    471    472            �           2604    25445    tbl_doctor_level id    DEFAULT     z   ALTER TABLE ONLY public.tbl_doctor_level ALTER COLUMN id SET DEFAULT nextval('public.tbl_doctor_level_id_seq'::regclass);
 B   ALTER TABLE public.tbl_doctor_level ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    478    477    478            �           2604    25425    tbl_doctors id    DEFAULT     p   ALTER TABLE ONLY public.tbl_doctors ALTER COLUMN id SET DEFAULT nextval('public.tbl_doctors_id_seq'::regclass);
 =   ALTER TABLE public.tbl_doctors ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    474    473    474            �           2604    25436    tbl_doctors_specialty id    DEFAULT     �   ALTER TABLE ONLY public.tbl_doctors_specialty ALTER COLUMN id SET DEFAULT nextval('public.tbl_doctors_specialty_id_seq'::regclass);
 G   ALTER TABLE public.tbl_doctors_specialty ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    476    475    476            �           2604    25452    tbl_expense_request id    DEFAULT     �   ALTER TABLE ONLY public.tbl_expense_request ALTER COLUMN id SET DEFAULT nextval('public.tbl_expense_request_id_seq'::regclass);
 E   ALTER TABLE public.tbl_expense_request ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    480    479    480            �           2604    25462    tbl_familysetup id    DEFAULT     x   ALTER TABLE ONLY public.tbl_familysetup ALTER COLUMN id SET DEFAULT nextval('public.tbl_familysetup_id_seq'::regclass);
 A   ALTER TABLE public.tbl_familysetup ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    481    482    482                       2604    16946    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    304    303    304            �          0    16428    accountspayable 
   TABLE DATA           �   COPY public.accountspayable (id, payment_id, vendor_name, invoice_number, invoice_date, due_date, amount_due, payment_status, payment_date, last_update) FROM stdin;
    public          postgres    false    216          �          0    16439    accountsreceivable 
   TABLE DATA           �   COPY public.accountsreceivable (id, trans_date, trans_time, service, patient_id, transaction_id, amount, amount_owned, amount_paid, payment_status, payment_date, authourizer, pay_later_narration, patient_type, posted_by, last_update) FROM stdin;
    public          postgres    false    218   =      �          0    16451    ambulance_booking 
   TABLE DATA           �   COPY public.ambulance_booking (id, booking_id, service_id, state, place, amount, vehicle_type, status, booking_date, booked_start, booked_end, booked_by, added_by, added_date, book_updated_by, updated_at) FROM stdin;
    public          postgres    false    220   Z      �          0    16473    ambulance_service 
   TABLE DATA           �   COPY public.ambulance_service (id, service_id, state, place, sienna_amount, jeep_amount, updated_by, created_at, updated_at) FROM stdin;
    public          postgres    false    222   Y      �          0    16482    ambulance_table 
   TABLE DATA           y   COPY public.ambulance_table (id, ambulance_name, ambulance_id, added_by, added_date, updated_by, updated_at) FROM stdin;
    public          postgres    false    224   v      �          0    16492    appointment 
   TABLE DATA           �   COPY public.appointment (id, appointmentid, patientid, doctorid, detials, category, unit, appointmentdate, starttime, endtime, status, notes, created_at, updated_at, posted_by, post_from, visit_type) FROM stdin;
    public          postgres    false    226   �      �          0    16505 
   attendance 
   TABLE DATA           b   COPY public.attendance (id, staff_id, "Date", clockintime, clockouttime, hoursworked) FROM stdin;
    public          postgres    false    228   �      �          0    16513    bed 
   TABLE DATA           m   COPY public.bed (id, "BedID", "Category", "Ward", "BedName", "BedNumber", "BedAmount", "Status") FROM stdin;
    public          postgres    false    230   �      �          0    16520    bedcategory 
   TABLE DATA           P   COPY public.bedcategory (id, "CategoryName", amount, "Description") FROM stdin;
    public          postgres    false    232         �          0    16548 	   bill_item 
   TABLE DATA           w   COPY public.bill_item (item_id, item_name, description, bill_id, bill_date, qty, unit_price, total_amount) FROM stdin;
    public          postgres    false    238   d	      �          0    16557    bill_log 
   TABLE DATA           o   COPY public.bill_log (id, reference_id, bill_description, quantity, unit_price, total, added_date) FROM stdin;
    public          postgres    false    240   �	      �          0    16566    bill_payment_log 
   TABLE DATA           y   COPY public.bill_payment_log (id, reference_id, bill_description, quantity, unit_price, total, payment_date) FROM stdin;
    public          postgres    false    242   
      �          0    16529    billing 
   TABLE DATA           �   COPY public.billing (id, billing_id, patient_id, billing_date, billing_amount, paid_amount, billing_status, due_date, payment_date) FROM stdin;
    public          postgres    false    234   �
      �          0    16538    billing_information 
   TABLE DATA           �   COPY public.billing_information (id, billingid, visitid, billingdate, billedamount, paymentstatus, paymentdate, notes) FROM stdin;
    public          postgres    false    236   �
      �          0    16575    blood_collection_table 
   TABLE DATA           �   COPY public.blood_collection_table (id, collection_id, donor_id, collection_date, collection_volume, blood_component_types, performed_by) FROM stdin;
    public          postgres    false    244         �          0    16584    blood_inventory_table 
   TABLE DATA           �   COPY public.blood_inventory_table (id, inventory_id, blood_type, component_type, expiration_date, quantity, performed_by, created_at, updated_at) FROM stdin;
    public          postgres    false    246   .      �          0    16595    branch 
   TABLE DATA           �   COPY public.branch (id, branchname, branchprefix, company, address, added_by, email, phone, contactperson, status, createddate, lastupdated) FROM stdin;
    public          postgres    false    248   K                0    16969    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    306   =                0    16976    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    307   Z      �          0    16612    case_log 
   TABLE DATA           m   COPY public.case_log (id, case_id, case_name, status, datex, timex, sex, entered_by, created_at) FROM stdin;
    public          postgres    false    250   w      �          0    16622    cashiersales 
   TABLE DATA           �   COPY public.cashiersales (id, saleid, cashierid, transactionid, saledatetime, customername, paymentmethod, totalamount, itemssold) FROM stdin;
    public          postgres    false    252         �          0    16631    cashiershift 
   TABLE DATA           �   COPY public.cashiershift (id, shiftid, cashierid, registerid, shiftstartdatetime, shiftenddatetime, totalsales, totalcashin, totalcashout) FROM stdin;
    public          postgres    false    254   7      �          0    16638    cashiertransactionslog 
   TABLE DATA           y   COPY public.cashiertransactionslog (id, logid, cashierid, transactiondatetime, transactiontype, description) FROM stdin;
    public          postgres    false    256   T      �          0    16647    cashregister 
   TABLE DATA           �   COPY public.cashregister (id, registerid, cashierid, openingdatetime, closingdatetime, openingbalance, closingbalance, status) FROM stdin;
    public          postgres    false    258   q      �          0    16656    cashtransactions 
   TABLE DATA           �   COPY public.cashtransactions (id, transactionid, registerid, transactiondatetime, transactiontype, amount, description) FROM stdin;
    public          postgres    false    260   �      �          0    16666    centralstore 
   TABLE DATA           �   COPY public.centralstore (id, itemid, itemname, itemdescription, unitcost, unitsales, itemquantity, itemexpirydate, status) FROM stdin;
    public          postgres    false    262   �      �          0    16675    chart_of_account 
   TABLE DATA           T   COPY public.chart_of_account (id, account_name, account_type, added_by) FROM stdin;
    public          postgres    false    264   �      �          0    16682    confirmation_appraisal 
   TABLE DATA             COPY public.confirmation_appraisal (confirmationappraisalid, employeeid, appraisaldate, confirmationstatus, appraisalresult, comments, initiator, initiationdate, selfassessment, supervisorappraisal, hodrecommendation, status, approvallevel, approvaldate) FROM stdin;
    public          postgres    false    266   �      �          0    16692    corporate_insurance 
   TABLE DATA           �   COPY public.corporate_insurance (id, insuranceid, companyname, address, phone, contactperson, contactemail, corporatetype, status, added_by) FROM stdin;
    public          postgres    false    268   �      �          0    16702    corporate_insurance_specialty 
   TABLE DATA           8  COPY public.corporate_insurance_specialty (id, specialtyid, corporateinsurancename, specialty, department, designation, consultationamountfirstvisit, companytype, consultationamountrevisit, ipconsultationamountfirstvisit, ipconsultationamountrevisit, consultationperiod, branch, description, status) FROM stdin;
    public          postgres    false    270   �      �          0    16712    corpsedeposit 
   TABLE DATA           �  COPY public.corpsedeposit (id, case_id, datex, timex, name_of_corpse, age, sex, name_of_village, religion, dateofdeath, causeofdeath, placeofdeath, complexion, depositor_name, relationship, address, phone, tally_number, color, deposit_amount, mortician_name, cashier_signature, entered_by, additionalnotes, status, contract_form_image, created_at, updated_by, updated_at, update_today, storage_type) FROM stdin;
    public          postgres    false    272         �          0    16724    departmentgroup 
   TABLE DATA           <   COPY public.departmentgroup (id, name, type_id) FROM stdin;
    public          postgres    false    274         �          0    16731    departmentgrouptype 
   TABLE DATA           7   COPY public.departmentgrouptype (id, name) FROM stdin;
    public          postgres    false    276   :      �          0    16738    designation 
   TABLE DATA           G   COPY public.designation (id, name, created_at, updated_at) FROM stdin;
    public          postgres    false    278   q      �          0    16766 	   diet_plan 
   TABLE DATA              COPY public.diet_plan (dietplanid, patientid, dieticianid, start_date, end_date, status, instructions, created_at) FROM stdin;
    public          postgres    false    284   �      �          0    16747    dietary_assessment 
   TABLE DATA           �   COPY public.dietary_assessment (dietaryassessmentid, patientid, "Date", nutritional_assessment_scores, dietician_comments) FROM stdin;
    public          postgres    false    280   
      �          0    16758    dietician_appointments 
   TABLE DATA           �   COPY public.dietician_appointments (appointmentid, patientid, dieticianid, appointment_date, appointment_time, status) FROM stdin;
    public          postgres    false    282   '      �          0    16777    dismissed_staff 
   TABLE DATA           �   COPY public.dismissed_staff (id, staff_id, fullname, dismissal_date, reason, comments, dismissal_type, created_at, updated_at) FROM stdin;
    public          postgres    false    286   D      �          0    16789    dispensations 
   TABLE DATA           �   COPY public.dispensations (id, prescription_id, prescription_date, prescription_time, patient_id, patient_name, dispensing_time, description, quantity, unit_cost, unit_price, total_amount, category, sponsor, dispensed_by) FROM stdin;
    public          postgres    false    288   a      �          0    16798    doctors 
   TABLE DATA           I  COPY public.doctors (id, doctor_id, title, first_name, last_name, email, gender, specialization, department, role, address, phone_number, date_of_birth, marital_status, blood_group, next_of_kin, state_of_origin, lga_of_origin, employment_date, "Schedule", photo, qualifications, years_of_experience, consultant_flag) FROM stdin;
    public          postgres    false    290   ~      �          0    16808    donor_table 
   TABLE DATA           m   COPY public.donor_table (id, donor_id, name, address, contact_info, blood_type, donor, reg_date) FROM stdin;
    public          postgres    false    292   �      �          0    16817    drugs 
   TABLE DATA           �   COPY public.drugs (drugid, itemid, activeingredient, brandname, dosageform, strength, prescriptionrequired, manufacturer, expirydate, batchnumber, storageconditions) FROM stdin;
    public          postgres    false    294   �      �          0    16826 	   embalming 
   TABLE DATA           }   COPY public.embalming (embalming_id, corpse_id, embalming_date, embalmer_name, embalming_method, embalming_cost) FROM stdin;
    public          postgres    false    296   �      �          0    16835    emergency_contacts 
   TABLE DATA              COPY public.emergency_contacts (id, "ContactID", "PatientID", "ContactName", "Relationship", "ContactInformation") FROM stdin;
    public          postgres    false    298         �          0    16844 	   employees 
   TABLE DATA           Y  COPY public.employees (id, title, employ_id, first_name, last_name, email, phone, address, hire_date, birth_date, gender, role, designation, department_type, department, unit_name, photo, employee_type, emergency_contact_name, emergency_contact_phone, emergency_contact_relationship, status, qualification, other_documents, bank_name, account_number, pension_manager, pension_number, referee_name, referee_contact, dependent_name, dependent_relation, dependent_contact, grade_level, confirmation_date, confirmation_status, work_status, branch, updated_at, staff_category, leave_allowance) FROM stdin;
    public          postgres    false    300   6                0    24611 	   equipment 
   TABLE DATA           l   COPY public.equipment (equipment_id, equipment_name, equipment_description, status, department) FROM stdin;
    public          postgres    false    318   �                0    24620    error_logger 
   TABLE DATA           J   COPY public.error_logger (id, error_message, error_timestamp) FROM stdin;
    public          postgres    false    320   7      	          0    17001    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    312   T                0    24630    feedback_surveys 
   TABLE DATA           Y   COPY public.feedback_surveys (id, surveyid, patientid, questions, responses) FROM stdin;
    public          postgres    false    322   q                0    24639    financialreports 
   TABLE DATA           �   COPY public.financialreports (id, reportid, reportname, reportdate, reporttype, reportperiod, reportdescription, reportstatus, reportowner, lastupdate) FROM stdin;
    public          postgres    false    324   �                0    24662 	   food_item 
   TABLE DATA           k   COPY public.food_item (fooditemid, name, category, calories_per_100g, nutritional_information) FROM stdin;
    public          postgres    false    326   �                0    24675    generalledger 
   TABLE DATA           �   COPY public.generalledger (id, transaction_id, account_id, transaction_date, transaction_type, transaction_amount, transaction_description, last_update) FROM stdin;
    public          postgres    false    328   �                0    24685    incident_report 
   TABLE DATA           �   COPY public.incident_report (id, incident_id, incident_type, incident_date, incident_description, corrective_actions_taken, report_status, report_date) FROM stdin;
    public          postgres    false    330   �                0    24695 	   inpatient 
   TABLE DATA           �   COPY public.inpatient (id, patientid, roomnumber, admissiondate, dischargedate, diagnosis, procedures, medication, attendingphysician, treatmentplan, billinginformationid, status) FROM stdin;
    public          postgres    false    332                    0    24709 	   insurance 
   TABLE DATA           u   COPY public.insurance (id, insurance_id, patient_id, insurance_provider, policy_number, coverage_amount) FROM stdin;
    public          postgres    false    334          !          0    24716    investigations 
   TABLE DATA           P   COPY public.investigations (id, investigation_id, name, department) FROM stdin;
    public          postgres    false    336   �       #          0    24725    item 
   TABLE DATA           t   COPY public.item (id, item_id, item_group, item_subgroup, item_name, status, item_category, date_added) FROM stdin;
    public          postgres    false    338   D!      )          0    24751 
   item_group 
   TABLE DATA           N   COPY public.item_group (id, itemgroup_id, itemgroupname, comment) FROM stdin;
    public          postgres    false    344   a!      %          0    24735    itemcategory 
   TABLE DATA           Q   COPY public.itemcategory (id, categoryid, categoryname, description) FROM stdin;
    public          postgres    false    340   �$      '          0    24744    itemsubgroup 
   TABLE DATA           K   COPY public.itemsubgroup (id, subgroupid, subgroupname, alias) FROM stdin;
    public          postgres    false    342   �$      -          0    24769    job_applications 
   TABLE DATA           �   COPY public.job_applications (id, firstname, lastname, email, position_applying_for, available_date, employment_status, resume_link, resume_document, reference_firstname, reference_lastname, referees_name, reference_email, apply_date) FROM stdin;
    public          postgres    false    348   �%                0    16993    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    310   �%                0    16984    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    309   �%      +          0    24760    laboratory_tests 
   TABLE DATA           w   COPY public.laboratory_tests (id, test_id, patient_id, test_name, test_result, test_date, ordering_doctor) FROM stdin;
    public          postgres    false    346   &      /          0    24780    labradiology 
   TABLE DATA           �   COPY public.labradiology (id, test_id, patient_id, order_date, test_name, test_type, order_status, result_date, result, technician_id, physician_id, comment) FROM stdin;
    public          postgres    false    350   x&      3          0    24799    leave_entitlement 
   TABLE DATA           �   COPY public.leave_entitlement (id, staff_id, fullname, employment_date, allowance, department, branch, carry_over_balance, reset_date, created_at, updated_at) FROM stdin;
    public          postgres    false    354   �&      5          0    24808 
   leave_type 
   TABLE DATA           [   COPY public.leave_type (id, leave_type, leave_details, created_at, updated_at) FROM stdin;
    public          postgres    false    356   �&      1          0    24791    leaverequests 
   TABLE DATA           _   COPY public.leaverequests (id, staff_id, leave_type, start_date, end_date, status) FROM stdin;
    public          postgres    false    352   �'      7          0    24817    meal_schedule 
   TABLE DATA           �   COPY public.meal_schedule (mealscheduleid, dietplanid, day_of_the_week, time_of_day, fooditemid, portion_size, created_at) FROM stdin;
    public          postgres    false    358   �'      9          0    24825    medical_records 
   TABLE DATA           �   COPY public.medical_records (record_id, patient_id, doctor_id, record_date, diagnosis, "Treatment Plan", "Test Results", file_path) FROM stdin;
    public          postgres    false    360   �'      ;          0    24834 
   medication 
   TABLE DATA           �   COPY public.medication (id, medicationid, medication_name, generic_name, manufacturer, strength, dosage_form, description, unit_price, expiry_date, prescription_required) FROM stdin;
    public          postgres    false    362   �'      =          0    24843    medication_categories 
   TABLE DATA           [   COPY public.medication_categories (id, categoryid, category_name, description) FROM stdin;
    public          postgres    false    364   (      ?          0    24852    medication_inventory 
   TABLE DATA           �   COPY public.medication_inventory (id, inventoryid, medicationid, quantity, purchase_date, supplier, purchase_price, location) FROM stdin;
    public          postgres    false    366   4(      A          0    24861    mews_vitals 
   TABLE DATA           �   COPY public.mews_vitals (mews_id, patient_id, recorded_date, recorded_time, systolic_bp, heart_rate, respiratory_rate, spo2, temperature, avpu_score_gcs, urine_output_ml_hr, total_score, oxy_posted_by) FROM stdin;
    public          postgres    false    368   Q(      �          0    16936 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    302   n(      C          0    24868    mortuary 
   TABLE DATA           y   COPY public.mortuary (id, deceased_id, name, date_of_death, cause_of_death, next_of_kin, mortuary_attendant) FROM stdin;
    public          postgres    false    370   �(      G          0    24888    mortuary_bill 
   TABLE DATA           �   COPY public.mortuary_bill (bill_id, corpse_id, date_issued, amount_paid, total_amount, payment_status, payer_name, payment_date, charge_date, entered_by, additional_notes, updated_by, updated_at) FROM stdin;
    public          postgres    false    374   �(      I          0    24898    mortuary_daily_tasks 
   TABLE DATA           �   COPY public.mortuary_daily_tasks (task_id, case_id, staff_id, task_date, task_description, status, entered_by, notes) FROM stdin;
    public          postgres    false    376   +*      K          0    24907    mortuary_service 
   TABLE DATA           z   COPY public.mortuary_service (id, service_name, price, details, added_by, created_at, updated_by, updated_at) FROM stdin;
    public          postgres    false    378   H*      E          0    24877    mortuarymaterials 
   TABLE DATA           �   COPY public.mortuarymaterials (id, material_id, material_name, category, description, quantity, unit, added_by, updated_by, created_at, updated_at) FROM stdin;
    public          postgres    false    372   �+      M          0    24918    notes 
   TABLE DATA           T   COPY public.notes (note_id, patient_id, doctor_id, note, recorded_date) FROM stdin;
    public          postgres    false    380   �+      O          0    24927    notifications_alerts 
   TABLE DATA           d   COPY public.notifications_alerts (id, notification_id, patient_id, message, created_at) FROM stdin;
    public          postgres    false    382   �+      Q          0    24937    nurses 
   TABLE DATA           �   COPY public.nurses (id, nurse_id, nurse_name, email, password, department, address, phone_number, date_of_birth, joining_date) FROM stdin;
    public          postgres    false    384   ,      S          0    24947    nutrition_log 
   TABLE DATA           o   COPY public.nutrition_log (nutritionlogid, patientid, date, meal, fooditemid, portion_size, notes) FROM stdin;
    public          postgres    false    386   (,      U          0    24956    ophthalmology_vitals 
   TABLE DATA           �   COPY public.ophthalmology_vitals (vital_id, patient_id, recorded_date, recorded_time, va_re, va_le, va_pin_hole_re, va_pin_hole_le, va_glasses_re, va_glasses_le, bp_systolic, bp_diastolic, fbs, rbs, rvs, nurse_name, nurse_note) FROM stdin;
    public          postgres    false    388   E,      W          0    24965    optometry_subjective_refraction 
   TABLE DATA           �   COPY public.optometry_subjective_refraction (refraction_id, patient_id, recorded_date, recorded_time, subjective_refraction_re, subjective_refraction_le, optometrist_name, optometrist_note) FROM stdin;
    public          postgres    false    390   b,      Y          0    24974 
   outpatient 
   TABLE DATA           �   COPY public.outpatient (id, visitid, patientid, dateofservice, servicetype, attendingphysician, diagnosis, procedures, medication, billinginformationid, status) FROM stdin;
    public          postgres    false    392   ,      [          0    24984    package 
   TABLE DATA           �   COPY public.package (id, package_id, package_name, package_type, package_price, actual_price, package_duration, status, package_services) FROM stdin;
    public          postgres    false    394   �,                0    16953    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    305   �,      _          0    25002    patient_dietary_preferences 
   TABLE DATA           �   COPY public.patient_dietary_preferences (patient_dietary_preferences_id, patient_id, food_allergies, dietary_restrictions, likes_and_dislikes) FROM stdin;
    public          postgres    false    398   �,      a          0    25011    patient_document 
   TABLE DATA           f   COPY public.patient_document (id, document_id, details, document, patient_id, created_at) FROM stdin;
    public          postgres    false    400   �,      c          0    25021    patient_medical_history 
   TABLE DATA           �   COPY public.patient_medical_history (id, historyid, patientid, encounterid, encounterdate, diagnosis, procedures, medication, immunization, medicalhistory, surgicalhistory, allergies, currentmedications, familyhistory, notes) FROM stdin;
    public          postgres    false    402   -      ]          0    24993    patientownmedication 
   TABLE DATA           i   COPY public.patientownmedication (id, drug_name, category, added_date, time_added, added_by) FROM stdin;
    public          postgres    false    396   --      e          0    25030    payroll 
   TABLE DATA           �   COPY public.payroll (id, month_year, employee_name, basic_salary, allowance, others, gross_pay, sanction, other_deduction, loan, type, total_due, net_pay, status, staff_id, account_name, bank_name, account_number, created_at, updated_at) FROM stdin;
    public          postgres    false    404   J-      g          0    25042    payroll_log 
   TABLE DATA           l   COPY public.payroll_log (id, month_year, amount, status, staff_workers, created_at, updated_at) FROM stdin;
    public          postgres    false    406   g-      i          0    25053    personal_requests 
   TABLE DATA           �   COPY public.personal_requests (id, staff_id, fullname, request_type, details, start_date, end_date, status, created_at, updated_at) FROM stdin;
    public          postgres    false    408   �-      k          0    25064    pharmacy 
   TABLE DATA           �   COPY public.pharmacy (id, itemid, itemname, itemdescription, unitcost, unitsales, itemquantity, itemexpirydate, status, reg_time, reg_date, batch_no, posted_by) FROM stdin;
    public          postgres    false    410   �-      m          0    25073    pharmacy_inventory 
   TABLE DATA           z   COPY public.pharmacy_inventory (id, item_id, item_name, quantity_in_stock, amount, reorder_level, stock_date) FROM stdin;
    public          postgres    false    412   �-      o          0    25083    prescriptions 
   TABLE DATA           �   COPY public.prescriptions (id, patient_id, doctor_id, drug_name, dosage, frequency, duration, prescription_date, record_time, quantity, instructions, route, amount, status, confirmation, accept_status) FROM stdin;
    public          postgres    false    414   �-      q          0    25095 
   price_list 
   TABLE DATA           {   COPY public.price_list (id, price_name, amount, description, freeday, added_at, updated, added_by, updated_by) FROM stdin;
    public          postgres    false    416   �-      s          0    25106    privatetariff 
   TABLE DATA           g   COPY public.privatetariff (id, tariffid, servicename, description, unitcost, agreedamount) FROM stdin;
    public          postgres    false    418   /      u          0    25116    progress_tracking 
   TABLE DATA           v   COPY public.progress_tracking (progresstrackingid, patientid, date, weight, bmi, target_weight, comments) FROM stdin;
    public          postgres    false    420   6/      w          0    25128    public_holidays 
   TABLE DATA           n   COPY public.public_holidays (id, start_date, end_date, holiday_description, status, holiday_year) FROM stdin;
    public          postgres    false    422   S/      y          0    25139    refund 
   TABLE DATA           |   COPY public.refund (id, refundid, cashierid, transactionid, refunddatetime, customername, refundamount, reason) FROM stdin;
    public          postgres    false    424   �/      {          0    25153    reports_analytics 
   TABLE DATA           Y   COPY public.reports_analytics (id, reportid, reporttype, datex, generatedby) FROM stdin;
    public          postgres    false    426   �/      }          0    25162    requisition 
   TABLE DATA             COPY public.requisition (id, requisition_id, requisition_date, item, item_id, quantity, qty_disbursed, quantity_bal, department, requisition_status, requester, branch, approved_rejected_by, comments, return_status, returned_by, created_at, updated_at) FROM stdin;
    public          postgres    false    428   �/                0    25184    roles 
   TABLE DATA           1   COPY public.roles (id, name, status) FROM stdin;
    public          postgres    false    430   �/      �          0    25194    rooms 
   TABLE DATA           Q   COPY public.rooms (room_id, ward_id, room_number, room_type, status) FROM stdin;
    public          postgres    false    432   �2      �          0    25201    sattfaddress 
   TABLE DATA           Q   COPY public.sattfaddress (id, staff_id, addresstype, addressdetails) FROM stdin;
    public          postgres    false    434   �2      �          0    25212 
   scheduling 
   TABLE DATA           b   COPY public.scheduling (id, schedule_id, doctor_id, date_and_time, appointment_slots) FROM stdin;
    public          postgres    false    436   �2                0    17068    security_access 
   TABLE DATA           �   COPY public.security_access (id, name, staff_id, username, password, role, status, department, branch, department_type, unit) FROM stdin;
    public          postgres    false    316   3      �          0    25221    session_planning 
   TABLE DATA           �  COPY public.session_planning (id, name, session_title, date_time_session, age_group, group_size, location_of_session, session_objective, priority_outcome, brief_description, core_program_area, session_preparation_setup, supplies_needed, additional_staff_needed, petty_cash_needed, vehicle_needed, project_budget_cost, additional_resource_needed, on_the_stop_fun, date_submitted, date_approved, submitted_by, approved_by, token_id) FROM stdin;
    public          postgres    false    438   �9                0    17022    sessions 
   TABLE DATA           k   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity, new_column) FROM stdin;
    public          postgres    false    314   �9      �          0    25470    staff 
   TABLE DATA              COPY public.staff (id, title, staff_id, first_name, last_name, email, marital_status, role, department, unit, address, phone, date_of_birth, gender, employment_date, status, supervisor, responsibility, state_of_origin, lga_of_origin, next_of_kin_name, created_at, updated_at) FROM stdin;
    public          postgres    false    484   �9      �          0    25330    staff_document 
   TABLE DATA              COPY public.staff_document (id, staff_id, fullname, document_id, document_title, document, created_at, updated_at) FROM stdin;
    public          postgres    false    454   (;      �          0    25348    staff_financial_info 
   TABLE DATA           �   COPY public.staff_financial_info (id, staff_id, salary, pay_period, pay_date, deductions, allowances, gross_pay, net_pay, tax_rate, tax_amount, account_name, bank_name, account_number, other_benefits, total_compensation, update_at) FROM stdin;
    public          postgres    false    458   <      �          0    25358    staff_grade_levels 
   TABLE DATA           �   COPY public.staff_grade_levels (id, grade_level, description, min_salary, max_salary, benefits, created_at, updated_at) FROM stdin;
    public          postgres    false    460   �<      �          0    25369    staff_group 
   TABLE DATA           M   COPY public.staff_group (id, group_type, created_at, updated_at) FROM stdin;
    public          postgres    false    462   r=      �          0    25378    staff_qualification 
   TABLE DATA           �   COPY public.staff_qualification (id, staff_id, institution_attended, location, year_of_graduation, certificate_obtained, specification, date_added, add_by) FROM stdin;
    public          postgres    false    464   �=      �          0    25388    staff_referees 
   TABLE DATA           �   COPY public.staff_referees (id, staff_id, staff_first_name, staff_last_name, referee_id, relationship, referee_name, profession, address, contact_info, created_at, updated_at) FROM stdin;
    public          postgres    false    466   k>      �          0    25399    staff_suspensions 
   TABLE DATA           �   COPY public.staff_suspensions (id, staff_id, name, suspension_date, suspension_end_date, reason, status, suspension_type, duration) FROM stdin;
    public          postgres    false    468   ?      �          0    25266    staffcategory 
   TABLE DATA           A   COPY public.staffcategory (id, categoryname, status) FROM stdin;
    public          postgres    false    440   r?      �          0    25276    staffcompensation 
   TABLE DATA           s   COPY public.staffcompensation (id, staff_id, salary, paygrade, currency, bankaccountdetails, benefits) FROM stdin;
    public          postgres    false    442   �?      �          0    25285    staffcontact 
   TABLE DATA           Q   COPY public.staffcontact (id, staff_id, contacttype, contactdetails) FROM stdin;
    public          postgres    false    444   �?      �          0    25292    staffdependent 
   TABLE DATA           m   COPY public.staffdependent (id, staff_id, dependentname, relationship, gender, age, dateofbirth) FROM stdin;
    public          postgres    false    446   �?      �          0    25301    staffdesignation 
   TABLE DATA           d   COPY public.staffdesignation (id, designationname, description, created_at, updated_at) FROM stdin;
    public          postgres    false    448   �?      �          0    25341    staffeducation 
   TABLE DATA           b   COPY public.staffeducation (id, staff_id, degree, institution, major, graduationyear) FROM stdin;
    public          postgres    false    456   �A      �          0    25312    staffemployment 
   TABLE DATA           t   COPY public.staffemployment (id, staff_id, "position", department, manager, hiredate, employmentstatus) FROM stdin;
    public          postgres    false    450   �A      �          0    25319 
   stafftitle 
   TABLE DATA           X   COPY public.stafftitle (id, titlename, description, created_at, updated_at) FROM stdin;
    public          postgres    false    452   �A      �          0    25408    supplies 
   TABLE DATA           L   COPY public.supplies (supply_id, item_name, quantity, supplier) FROM stdin;
    public          postgres    false    470   CB      �          0    25415 	   surgeries 
   TABLE DATA           b   COPY public.surgeries (surgery_id, patient_id, doctor_id, surgery_date, surgery_name) FROM stdin;
    public          postgres    false    472   �B      �          0    25442    tbl_doctor_level 
   TABLE DATA           5   COPY public.tbl_doctor_level (id, level) FROM stdin;
    public          postgres    false    478   'C      �          0    25422    tbl_doctors 
   TABLE DATA           �   COPY public.tbl_doctors (id, doctorid, doctorname, email, department, phone, specialty, status, level, inhouse, qualification, added_by) FROM stdin;
    public          postgres    false    474   yC      �          0    25433    tbl_doctors_specialty 
   TABLE DATA           K   COPY public.tbl_doctors_specialty (id, specialtyname, remarks) FROM stdin;
    public          postgres    false    476    D      �          0    25449    tbl_expense_request 
   TABLE DATA           �   COPY public.tbl_expense_request (id, expenserequestid, employeeid, requestdate, expensename, expensedescription, amount, vendor, documents, status, approvaldate, posteddate, approveby, review_no, notes) FROM stdin;
    public          postgres    false    480   XG      �          0    25459    tbl_familysetup 
   TABLE DATA           �   COPY public.tbl_familysetup (id, family_name, home_address, contact_person, familysetup_type, contact_person_phone, created_at) FROM stdin;
    public          postgres    false    482   uG                0    16943    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    304   �G      A           0    0    accountspayable_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.accountspayable_id_seq', 1, false);
          public          postgres    false    215            B           0    0    accountsreceivable_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.accountsreceivable_id_seq', 1, false);
          public          postgres    false    217            C           0    0    ambulance_booking_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ambulance_booking_id_seq', 1, false);
          public          postgres    false    219            D           0    0    ambulance_service_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ambulance_service_id_seq', 1, false);
          public          postgres    false    221            E           0    0    ambulance_table_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ambulance_table_id_seq', 1, false);
          public          postgres    false    223            F           0    0    appointment_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.appointment_id_seq', 1, false);
          public          postgres    false    225            G           0    0    attendance_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.attendance_id_seq', 1, false);
          public          postgres    false    227            H           0    0 
   bed_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.bed_id_seq', 1, false);
          public          postgres    false    229            I           0    0    bedcategory_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.bedcategory_id_seq', 1, false);
          public          postgres    false    231            J           0    0    bill_item_item_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bill_item_item_id_seq', 1, false);
          public          postgres    false    237            K           0    0    bill_log_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.bill_log_id_seq', 1, false);
          public          postgres    false    239            L           0    0    bill_payment_log_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.bill_payment_log_id_seq', 1, false);
          public          postgres    false    241            M           0    0    billing_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.billing_id_seq', 1, false);
          public          postgres    false    233            N           0    0    billing_information_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.billing_information_id_seq', 1, false);
          public          postgres    false    235            O           0    0    blood_collection_table_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.blood_collection_table_id_seq', 1, false);
          public          postgres    false    243            P           0    0    blood_inventory_table_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.blood_inventory_table_id_seq', 1, false);
          public          postgres    false    245            Q           0    0    branch_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.branch_id_seq', 1, false);
          public          postgres    false    247            R           0    0    case_log_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.case_log_id_seq', 1, false);
          public          postgres    false    249            S           0    0    cashiersales_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.cashiersales_id_seq', 1, false);
          public          postgres    false    251            T           0    0    cashiershift_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.cashiershift_id_seq', 1, false);
          public          postgres    false    253            U           0    0    cashiertransactionslog_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.cashiertransactionslog_id_seq', 1, false);
          public          postgres    false    255            V           0    0    cashregister_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.cashregister_id_seq', 1, false);
          public          postgres    false    257            W           0    0    cashtransactions_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.cashtransactions_id_seq', 1, false);
          public          postgres    false    259            X           0    0    centralstore_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.centralstore_id_seq', 1, false);
          public          postgres    false    261            Y           0    0    chart_of_account_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.chart_of_account_id_seq', 1, false);
          public          postgres    false    263            Z           0    0 2   confirmation_appraisal_confirmationappraisalid_seq    SEQUENCE SET     a   SELECT pg_catalog.setval('public.confirmation_appraisal_confirmationappraisalid_seq', 1, false);
          public          postgres    false    265            [           0    0    corporate_insurance_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.corporate_insurance_id_seq', 1, false);
          public          postgres    false    267            \           0    0 $   corporate_insurance_specialty_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.corporate_insurance_specialty_id_seq', 1, false);
          public          postgres    false    269            ]           0    0    corpsedeposit_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.corpsedeposit_id_seq', 1, false);
          public          postgres    false    271            ^           0    0    departmentgroup_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.departmentgroup_id_seq', 1, false);
          public          postgres    false    273            _           0    0    departmentgrouptype_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.departmentgrouptype_id_seq', 2, true);
          public          postgres    false    275            `           0    0    designation_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.designation_id_seq', 1, false);
          public          postgres    false    277            a           0    0    diet_plan_dietplanid_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.diet_plan_dietplanid_seq', 1, false);
          public          postgres    false    283            b           0    0 *   dietary_assessment_dietaryassessmentid_seq    SEQUENCE SET     Y   SELECT pg_catalog.setval('public.dietary_assessment_dietaryassessmentid_seq', 1, false);
          public          postgres    false    279            c           0    0 (   dietician_appointments_appointmentid_seq    SEQUENCE SET     W   SELECT pg_catalog.setval('public.dietician_appointments_appointmentid_seq', 1, false);
          public          postgres    false    281            d           0    0    dismissed_staff_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.dismissed_staff_id_seq', 1, false);
          public          postgres    false    285            e           0    0    dispensations_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.dispensations_id_seq', 1, false);
          public          postgres    false    287            f           0    0    doctors_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.doctors_id_seq', 1, false);
          public          postgres    false    289            g           0    0    donor_table_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.donor_table_id_seq', 1, false);
          public          postgres    false    291            h           0    0    drugs_drugid_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.drugs_drugid_seq', 31, true);
          public          postgres    false    293            i           0    0    embalming_embalming_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.embalming_embalming_id_seq', 1, false);
          public          postgres    false    295            j           0    0    emergency_contacts_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.emergency_contacts_id_seq', 1, false);
          public          postgres    false    297            k           0    0    employees_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.employees_id_seq', 1, false);
          public          postgres    false    299            l           0    0    equipment_equipment_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.equipment_equipment_id_seq', 1, false);
          public          postgres    false    317            m           0    0    error_logger_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.error_logger_id_seq', 1, false);
          public          postgres    false    319            n           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    311            o           0    0    feedback_surveys_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.feedback_surveys_id_seq', 1, false);
          public          postgres    false    321            p           0    0    financialreports_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.financialreports_id_seq', 1, false);
          public          postgres    false    323            q           0    0    food_item_fooditemid_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.food_item_fooditemid_seq', 1, false);
          public          postgres    false    325            r           0    0    generalledger_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.generalledger_id_seq', 1, false);
          public          postgres    false    327            s           0    0    incident_report_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.incident_report_id_seq', 1, false);
          public          postgres    false    329            t           0    0    inpatient_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.inpatient_id_seq', 1, false);
          public          postgres    false    331            u           0    0    insurance_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.insurance_id_seq', 1, false);
          public          postgres    false    333            v           0    0    investigations_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.investigations_id_seq', 1, false);
          public          postgres    false    335            w           0    0    item_group_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.item_group_id_seq', 48, true);
          public          postgres    false    343            x           0    0    item_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.item_id_seq', 1, false);
          public          postgres    false    337            y           0    0    itemcategory_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.itemcategory_id_seq', 1, false);
          public          postgres    false    339            z           0    0    itemsubgroup_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.itemsubgroup_id_seq', 9, true);
          public          postgres    false    341            {           0    0    job_applications_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.job_applications_id_seq', 1, false);
          public          postgres    false    347            |           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    308            }           0    0    laboratory_tests_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.laboratory_tests_id_seq', 1, false);
          public          postgres    false    345            ~           0    0    labradiology_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.labradiology_id_seq', 1, false);
          public          postgres    false    349                       0    0    leave_entitlement_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.leave_entitlement_id_seq', 1, false);
          public          postgres    false    353            �           0    0    leave_type_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.leave_type_id_seq', 1, false);
          public          postgres    false    355            �           0    0    leaverequests_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.leaverequests_id_seq', 1, false);
          public          postgres    false    351            �           0    0     meal_schedule_mealscheduleid_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.meal_schedule_mealscheduleid_seq', 1, false);
          public          postgres    false    357            �           0    0    medical_records_record_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.medical_records_record_id_seq', 1, false);
          public          postgres    false    359            �           0    0    medication_categories_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.medication_categories_id_seq', 1, false);
          public          postgres    false    363            �           0    0    medication_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.medication_id_seq', 1, false);
          public          postgres    false    361            �           0    0    medication_inventory_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.medication_inventory_id_seq', 1, false);
          public          postgres    false    365            �           0    0    mews_vitals_mews_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.mews_vitals_mews_id_seq', 1, false);
          public          postgres    false    367            �           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);
          public          postgres    false    301            �           0    0    mortuary_bill_bill_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.mortuary_bill_bill_id_seq', 1, false);
          public          postgres    false    373            �           0    0     mortuary_daily_tasks_task_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.mortuary_daily_tasks_task_id_seq', 1, false);
          public          postgres    false    375            �           0    0    mortuary_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.mortuary_id_seq', 1, false);
          public          postgres    false    369            �           0    0    mortuary_service_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.mortuary_service_id_seq', 1, false);
          public          postgres    false    377            �           0    0    mortuarymaterials_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.mortuarymaterials_id_seq', 1, false);
          public          postgres    false    371            �           0    0    notes_note_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.notes_note_id_seq', 1, false);
          public          postgres    false    379            �           0    0    notifications_alerts_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.notifications_alerts_id_seq', 1, false);
          public          postgres    false    381            �           0    0    nurses_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.nurses_id_seq', 1, false);
          public          postgres    false    383            �           0    0     nutrition_log_nutritionlogid_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.nutrition_log_nutritionlogid_seq', 1, false);
          public          postgres    false    385            �           0    0 !   ophthalmology_vitals_vital_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.ophthalmology_vitals_vital_id_seq', 1, false);
          public          postgres    false    387            �           0    0 1   optometry_subjective_refraction_refraction_id_seq    SEQUENCE SET     `   SELECT pg_catalog.setval('public.optometry_subjective_refraction_refraction_id_seq', 1, false);
          public          postgres    false    389            �           0    0    outpatient_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.outpatient_id_seq', 1, false);
          public          postgres    false    391            �           0    0    package_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.package_id_seq', 1, false);
          public          postgres    false    393            �           0    0 >   patient_dietary_preferences_patient_dietary_preferences_id_seq    SEQUENCE SET     m   SELECT pg_catalog.setval('public.patient_dietary_preferences_patient_dietary_preferences_id_seq', 1, false);
          public          postgres    false    397            �           0    0    patient_document_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.patient_document_id_seq', 1, false);
          public          postgres    false    399            �           0    0    patient_medical_history_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.patient_medical_history_id_seq', 1, false);
          public          postgres    false    401            �           0    0    patientownmedication_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.patientownmedication_id_seq', 1, false);
          public          postgres    false    395            �           0    0    payroll_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.payroll_id_seq', 1, false);
          public          postgres    false    403            �           0    0    payroll_log_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.payroll_log_id_seq', 1, false);
          public          postgres    false    405            �           0    0    personal_requests_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.personal_requests_id_seq', 1, false);
          public          postgres    false    407            �           0    0    pharmacy_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.pharmacy_id_seq', 1, false);
          public          postgres    false    409            �           0    0    pharmacy_inventory_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.pharmacy_inventory_id_seq', 1, false);
          public          postgres    false    411            �           0    0    prescriptions_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.prescriptions_id_seq', 1, false);
          public          postgres    false    413            �           0    0    price_list_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.price_list_id_seq', 1, false);
          public          postgres    false    415            �           0    0    privatetariff_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.privatetariff_id_seq', 1, false);
          public          postgres    false    417            �           0    0 (   progress_tracking_progresstrackingid_seq    SEQUENCE SET     W   SELECT pg_catalog.setval('public.progress_tracking_progresstrackingid_seq', 1, false);
          public          postgres    false    419            �           0    0    public_holidays_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.public_holidays_id_seq', 1, true);
          public          postgres    false    421            �           0    0    refund_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.refund_id_seq', 1, false);
          public          postgres    false    423            �           0    0    reports_analytics_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.reports_analytics_id_seq', 1, false);
          public          postgres    false    425            �           0    0    requisition_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.requisition_id_seq', 1, false);
          public          postgres    false    427            �           0    0    roles_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.roles_id_seq', 1, false);
          public          postgres    false    429            �           0    0    rooms_room_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.rooms_room_id_seq', 1, false);
          public          postgres    false    431            �           0    0    sattfaddress_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.sattfaddress_id_seq', 1, false);
          public          postgres    false    433            �           0    0    scheduling_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.scheduling_id_seq', 1, false);
          public          postgres    false    435            �           0    0    security_access_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.security_access_id_seq', 1, false);
          public          postgres    false    315            �           0    0    session_planning_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.session_planning_id_seq', 1, false);
          public          postgres    false    437            �           0    0    sessions_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.sessions_id_seq', 1, false);
          public          postgres    false    313            �           0    0    staff_document_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.staff_document_id_seq', 1, false);
          public          postgres    false    453            �           0    0    staff_financial_info_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.staff_financial_info_id_seq', 2, true);
          public          postgres    false    457            �           0    0    staff_grade_levels_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.staff_grade_levels_id_seq', 15, true);
          public          postgres    false    459            �           0    0    staff_group_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.staff_group_id_seq', 2, true);
          public          postgres    false    461            �           0    0    staff_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.staff_id_seq', 1, false);
          public          postgres    false    483            �           0    0    staff_qualification_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.staff_qualification_id_seq', 3, true);
          public          postgres    false    463            �           0    0    staff_referees_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.staff_referees_id_seq', 1, true);
          public          postgres    false    465            �           0    0    staff_suspensions_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.staff_suspensions_id_seq', 1, true);
          public          postgres    false    467            �           0    0    staffcategory_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.staffcategory_id_seq', 1, false);
          public          postgres    false    439            �           0    0    staffcompensation_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.staffcompensation_id_seq', 1, false);
          public          postgres    false    441            �           0    0    staffcontact_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.staffcontact_id_seq', 1, false);
          public          postgres    false    443            �           0    0    staffdependent_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.staffdependent_id_seq', 1, false);
          public          postgres    false    445            �           0    0    staffdesignation_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.staffdesignation_id_seq', 1, false);
          public          postgres    false    447            �           0    0    staffeducation_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.staffeducation_id_seq', 1, false);
          public          postgres    false    455            �           0    0    staffemployment_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.staffemployment_id_seq', 1, false);
          public          postgres    false    449            �           0    0    stafftitle_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.stafftitle_id_seq', 1, false);
          public          postgres    false    451            �           0    0    supplies_supply_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.supplies_supply_id_seq', 3, true);
          public          postgres    false    469            �           0    0    surgeries_surgery_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.surgeries_surgery_id_seq', 3, true);
          public          postgres    false    471            �           0    0    tbl_doctor_level_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.tbl_doctor_level_id_seq', 4, true);
          public          postgres    false    477            �           0    0    tbl_doctors_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.tbl_doctors_id_seq', 1, true);
          public          postgres    false    473            �           0    0    tbl_doctors_specialty_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.tbl_doctors_specialty_id_seq', 85, true);
          public          postgres    false    475            �           0    0    tbl_expense_request_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.tbl_expense_request_id_seq', 1, false);
          public          postgres    false    479            �           0    0    tbl_familysetup_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.tbl_familysetup_id_seq', 1, false);
          public          postgres    false    481            �           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
          public          postgres    false    303            �           2606    16435 $   accountspayable accountspayable_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.accountspayable
    ADD CONSTRAINT accountspayable_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.accountspayable DROP CONSTRAINT accountspayable_pkey;
       public            postgres    false    216                        2606    16448 *   accountsreceivable accountsreceivable_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.accountsreceivable
    ADD CONSTRAINT accountsreceivable_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.accountsreceivable DROP CONSTRAINT accountsreceivable_pkey;
       public            postgres    false    218                       2606    16469 (   ambulance_booking ambulance_booking_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.ambulance_booking
    ADD CONSTRAINT ambulance_booking_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.ambulance_booking DROP CONSTRAINT ambulance_booking_pkey;
       public            postgres    false    220                       2606    16479 (   ambulance_service ambulance_service_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.ambulance_service
    ADD CONSTRAINT ambulance_service_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.ambulance_service DROP CONSTRAINT ambulance_service_pkey;
       public            postgres    false    222                       2606    16489 $   ambulance_table ambulance_table_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ambulance_table
    ADD CONSTRAINT ambulance_table_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ambulance_table DROP CONSTRAINT ambulance_table_pkey;
       public            postgres    false    224                       2606    16502    appointment appointment_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.appointment
    ADD CONSTRAINT appointment_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.appointment DROP CONSTRAINT appointment_pkey;
       public            postgres    false    226            
           2606    16510    attendance attendance_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.attendance
    ADD CONSTRAINT attendance_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.attendance DROP CONSTRAINT attendance_pkey;
       public            postgres    false    228                       2606    16518    bed bed_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.bed
    ADD CONSTRAINT bed_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.bed DROP CONSTRAINT bed_pkey;
       public            postgres    false    230                       2606    16527    bedcategory bedcategory_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.bedcategory
    ADD CONSTRAINT bedcategory_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.bedcategory DROP CONSTRAINT bedcategory_pkey;
       public            postgres    false    232                       2606    16555    bill_item bill_item_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.bill_item
    ADD CONSTRAINT bill_item_pkey PRIMARY KEY (item_id);
 B   ALTER TABLE ONLY public.bill_item DROP CONSTRAINT bill_item_pkey;
       public            postgres    false    238                       2606    16564    bill_log bill_log_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.bill_log
    ADD CONSTRAINT bill_log_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.bill_log DROP CONSTRAINT bill_log_pkey;
       public            postgres    false    240                       2606    16573 &   bill_payment_log bill_payment_log_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.bill_payment_log
    ADD CONSTRAINT bill_payment_log_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.bill_payment_log DROP CONSTRAINT bill_payment_log_pkey;
       public            postgres    false    242                       2606    16546 ,   billing_information billing_information_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.billing_information
    ADD CONSTRAINT billing_information_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.billing_information DROP CONSTRAINT billing_information_pkey;
       public            postgres    false    236                       2606    16535    billing billing_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.billing
    ADD CONSTRAINT billing_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.billing DROP CONSTRAINT billing_pkey;
       public            postgres    false    234                       2606    16582 2   blood_collection_table blood_collection_table_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.blood_collection_table
    ADD CONSTRAINT blood_collection_table_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.blood_collection_table DROP CONSTRAINT blood_collection_table_pkey;
       public            postgres    false    244                       2606    16593 0   blood_inventory_table blood_inventory_table_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.blood_inventory_table
    ADD CONSTRAINT blood_inventory_table_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.blood_inventory_table DROP CONSTRAINT blood_inventory_table_pkey;
       public            postgres    false    246                       2606    16605    branch branch_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.branch
    ADD CONSTRAINT branch_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.branch DROP CONSTRAINT branch_pkey;
       public            postgres    false    248            ^           2606    16982    cache_locks cache_locks_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);
 F   ALTER TABLE ONLY public.cache_locks DROP CONSTRAINT cache_locks_pkey;
       public            postgres    false    307            \           2606    16975    cache cache_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);
 :   ALTER TABLE ONLY public.cache DROP CONSTRAINT cache_pkey;
       public            postgres    false    306                        2606    16620    case_log case_log_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.case_log
    ADD CONSTRAINT case_log_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.case_log DROP CONSTRAINT case_log_pkey;
       public            postgres    false    250            "           2606    16629    cashiersales cashiersales_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.cashiersales
    ADD CONSTRAINT cashiersales_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.cashiersales DROP CONSTRAINT cashiersales_pkey;
       public            postgres    false    252            $           2606    16636    cashiershift cashiershift_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.cashiershift
    ADD CONSTRAINT cashiershift_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.cashiershift DROP CONSTRAINT cashiershift_pkey;
       public            postgres    false    254            &           2606    16645 2   cashiertransactionslog cashiertransactionslog_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.cashiertransactionslog
    ADD CONSTRAINT cashiertransactionslog_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.cashiertransactionslog DROP CONSTRAINT cashiertransactionslog_pkey;
       public            postgres    false    256            (           2606    16653    cashregister cashregister_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.cashregister
    ADD CONSTRAINT cashregister_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.cashregister DROP CONSTRAINT cashregister_pkey;
       public            postgres    false    258            *           2606    16664 &   cashtransactions cashtransactions_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.cashtransactions
    ADD CONSTRAINT cashtransactions_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.cashtransactions DROP CONSTRAINT cashtransactions_pkey;
       public            postgres    false    260            ,           2606    16673    centralstore centralstore_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.centralstore
    ADD CONSTRAINT centralstore_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.centralstore DROP CONSTRAINT centralstore_pkey;
       public            postgres    false    262            .           2606    16680 &   chart_of_account chart_of_account_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.chart_of_account
    ADD CONSTRAINT chart_of_account_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.chart_of_account DROP CONSTRAINT chart_of_account_pkey;
       public            postgres    false    264            0           2606    16690 2   confirmation_appraisal confirmation_appraisal_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.confirmation_appraisal
    ADD CONSTRAINT confirmation_appraisal_pkey PRIMARY KEY (confirmationappraisalid);
 \   ALTER TABLE ONLY public.confirmation_appraisal DROP CONSTRAINT confirmation_appraisal_pkey;
       public            postgres    false    266            2           2606    16700 ,   corporate_insurance corporate_insurance_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.corporate_insurance
    ADD CONSTRAINT corporate_insurance_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.corporate_insurance DROP CONSTRAINT corporate_insurance_pkey;
       public            postgres    false    268            4           2606    16710 @   corporate_insurance_specialty corporate_insurance_specialty_pkey 
   CONSTRAINT     ~   ALTER TABLE ONLY public.corporate_insurance_specialty
    ADD CONSTRAINT corporate_insurance_specialty_pkey PRIMARY KEY (id);
 j   ALTER TABLE ONLY public.corporate_insurance_specialty DROP CONSTRAINT corporate_insurance_specialty_pkey;
       public            postgres    false    270            6           2606    16722     corpsedeposit corpsedeposit_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.corpsedeposit
    ADD CONSTRAINT corpsedeposit_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.corpsedeposit DROP CONSTRAINT corpsedeposit_pkey;
       public            postgres    false    272            8           2606    16729 $   departmentgroup departmentgroup_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.departmentgroup
    ADD CONSTRAINT departmentgroup_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.departmentgroup DROP CONSTRAINT departmentgroup_pkey;
       public            postgres    false    274            :           2606    16736 ,   departmentgrouptype departmentgrouptype_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.departmentgrouptype
    ADD CONSTRAINT departmentgrouptype_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.departmentgrouptype DROP CONSTRAINT departmentgrouptype_pkey;
       public            postgres    false    276            <           2606    16745    designation designation_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.designation
    ADD CONSTRAINT designation_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.designation DROP CONSTRAINT designation_pkey;
       public            postgres    false    278            B           2606    16775    diet_plan diet_plan_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.diet_plan
    ADD CONSTRAINT diet_plan_pkey PRIMARY KEY (dietplanid);
 B   ALTER TABLE ONLY public.diet_plan DROP CONSTRAINT diet_plan_pkey;
       public            postgres    false    284            >           2606    16755 *   dietary_assessment dietary_assessment_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.dietary_assessment
    ADD CONSTRAINT dietary_assessment_pkey PRIMARY KEY (dietaryassessmentid);
 T   ALTER TABLE ONLY public.dietary_assessment DROP CONSTRAINT dietary_assessment_pkey;
       public            postgres    false    280            @           2606    16764 2   dietician_appointments dietician_appointments_pkey 
   CONSTRAINT     {   ALTER TABLE ONLY public.dietician_appointments
    ADD CONSTRAINT dietician_appointments_pkey PRIMARY KEY (appointmentid);
 \   ALTER TABLE ONLY public.dietician_appointments DROP CONSTRAINT dietician_appointments_pkey;
       public            postgres    false    282            D           2606    16786 $   dismissed_staff dismissed_staff_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.dismissed_staff
    ADD CONSTRAINT dismissed_staff_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.dismissed_staff DROP CONSTRAINT dismissed_staff_pkey;
       public            postgres    false    286            F           2606    16796     dispensations dispensations_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.dispensations
    ADD CONSTRAINT dispensations_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.dispensations DROP CONSTRAINT dispensations_pkey;
       public            postgres    false    288            H           2606    16806    doctors doctors_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.doctors
    ADD CONSTRAINT doctors_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.doctors DROP CONSTRAINT doctors_pkey;
       public            postgres    false    290            J           2606    16815    donor_table donor_table_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.donor_table
    ADD CONSTRAINT donor_table_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.donor_table DROP CONSTRAINT donor_table_pkey;
       public            postgres    false    292            L           2606    16824    drugs drugs_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.drugs
    ADD CONSTRAINT drugs_pkey PRIMARY KEY (drugid);
 :   ALTER TABLE ONLY public.drugs DROP CONSTRAINT drugs_pkey;
       public            postgres    false    294            N           2606    16833    embalming embalming_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.embalming
    ADD CONSTRAINT embalming_pkey PRIMARY KEY (embalming_id);
 B   ALTER TABLE ONLY public.embalming DROP CONSTRAINT embalming_pkey;
       public            postgres    false    296            P           2606    16842 *   emergency_contacts emergency_contacts_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.emergency_contacts
    ADD CONSTRAINT emergency_contacts_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.emergency_contacts DROP CONSTRAINT emergency_contacts_pkey;
       public            postgres    false    298            R           2606    16855    employees employees_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.employees
    ADD CONSTRAINT employees_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.employees DROP CONSTRAINT employees_pkey;
       public            postgres    false    300            m           2606    24618    equipment equipment_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.equipment
    ADD CONSTRAINT equipment_pkey PRIMARY KEY (equipment_id);
 B   ALTER TABLE ONLY public.equipment DROP CONSTRAINT equipment_pkey;
       public            postgres    false    318            o           2606    24628    error_logger error_logger_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.error_logger
    ADD CONSTRAINT error_logger_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.error_logger DROP CONSTRAINT error_logger_pkey;
       public            postgres    false    320            e           2606    17009    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    312            g           2606    17011 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    312            q           2606    24637 &   feedback_surveys feedback_surveys_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.feedback_surveys
    ADD CONSTRAINT feedback_surveys_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.feedback_surveys DROP CONSTRAINT feedback_surveys_pkey;
       public            postgres    false    322            s           2606    24651 &   financialreports financialreports_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.financialreports
    ADD CONSTRAINT financialreports_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.financialreports DROP CONSTRAINT financialreports_pkey;
       public            postgres    false    324            u           2606    24673    food_item food_item_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.food_item
    ADD CONSTRAINT food_item_pkey PRIMARY KEY (fooditemid);
 B   ALTER TABLE ONLY public.food_item DROP CONSTRAINT food_item_pkey;
       public            postgres    false    326            w           2606    24683     generalledger generalledger_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.generalledger
    ADD CONSTRAINT generalledger_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.generalledger DROP CONSTRAINT generalledger_pkey;
       public            postgres    false    328            y           2606    24693 $   incident_report incident_report_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.incident_report
    ADD CONSTRAINT incident_report_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.incident_report DROP CONSTRAINT incident_report_pkey;
       public            postgres    false    330            {           2606    24707    inpatient inpatient_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.inpatient
    ADD CONSTRAINT inpatient_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.inpatient DROP CONSTRAINT inpatient_pkey;
       public            postgres    false    332            }           2606    24714    insurance insurance_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.insurance
    ADD CONSTRAINT insurance_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.insurance DROP CONSTRAINT insurance_pkey;
       public            postgres    false    334                       2606    24723 "   investigations investigations_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.investigations
    ADD CONSTRAINT investigations_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.investigations DROP CONSTRAINT investigations_pkey;
       public            postgres    false    336            �           2606    24758    item_group item_group_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.item_group
    ADD CONSTRAINT item_group_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.item_group DROP CONSTRAINT item_group_pkey;
       public            postgres    false    344            �           2606    24733    item item_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.item
    ADD CONSTRAINT item_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.item DROP CONSTRAINT item_pkey;
       public            postgres    false    338            �           2606    24742    itemcategory itemcategory_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.itemcategory
    ADD CONSTRAINT itemcategory_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.itemcategory DROP CONSTRAINT itemcategory_pkey;
       public            postgres    false    340            �           2606    24749    itemsubgroup itemsubgroup_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.itemsubgroup
    ADD CONSTRAINT itemsubgroup_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.itemsubgroup DROP CONSTRAINT itemsubgroup_pkey;
       public            postgres    false    342            �           2606    24777 &   job_applications job_applications_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.job_applications
    ADD CONSTRAINT job_applications_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.job_applications DROP CONSTRAINT job_applications_pkey;
       public            postgres    false    348            c           2606    16999    job_batches job_batches_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.job_batches DROP CONSTRAINT job_batches_pkey;
       public            postgres    false    310            `           2606    16991    jobs jobs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.jobs DROP CONSTRAINT jobs_pkey;
       public            postgres    false    309            �           2606    24767 &   laboratory_tests laboratory_tests_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.laboratory_tests
    ADD CONSTRAINT laboratory_tests_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.laboratory_tests DROP CONSTRAINT laboratory_tests_pkey;
       public            postgres    false    346            �           2606    24789    labradiology labradiology_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.labradiology
    ADD CONSTRAINT labradiology_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.labradiology DROP CONSTRAINT labradiology_pkey;
       public            postgres    false    350            �           2606    24806 (   leave_entitlement leave_entitlement_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.leave_entitlement
    ADD CONSTRAINT leave_entitlement_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.leave_entitlement DROP CONSTRAINT leave_entitlement_pkey;
       public            postgres    false    354            �           2606    24815    leave_type leave_type_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.leave_type
    ADD CONSTRAINT leave_type_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.leave_type DROP CONSTRAINT leave_type_pkey;
       public            postgres    false    356            �           2606    24797     leaverequests leaverequests_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.leaverequests
    ADD CONSTRAINT leaverequests_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.leaverequests DROP CONSTRAINT leaverequests_pkey;
       public            postgres    false    352            �           2606    24823     meal_schedule meal_schedule_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.meal_schedule
    ADD CONSTRAINT meal_schedule_pkey PRIMARY KEY (mealscheduleid);
 J   ALTER TABLE ONLY public.meal_schedule DROP CONSTRAINT meal_schedule_pkey;
       public            postgres    false    358            �           2606    24832 $   medical_records medical_records_pkey 
   CONSTRAINT     i   ALTER TABLE ONLY public.medical_records
    ADD CONSTRAINT medical_records_pkey PRIMARY KEY (record_id);
 N   ALTER TABLE ONLY public.medical_records DROP CONSTRAINT medical_records_pkey;
       public            postgres    false    360            �           2606    24850 0   medication_categories medication_categories_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.medication_categories
    ADD CONSTRAINT medication_categories_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.medication_categories DROP CONSTRAINT medication_categories_pkey;
       public            postgres    false    364            �           2606    24859 .   medication_inventory medication_inventory_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.medication_inventory
    ADD CONSTRAINT medication_inventory_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.medication_inventory DROP CONSTRAINT medication_inventory_pkey;
       public            postgres    false    366            �           2606    24841    medication medication_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.medication
    ADD CONSTRAINT medication_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.medication DROP CONSTRAINT medication_pkey;
       public            postgres    false    362            �           2606    24866    mews_vitals mews_vitals_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.mews_vitals
    ADD CONSTRAINT mews_vitals_pkey PRIMARY KEY (mews_id);
 F   ALTER TABLE ONLY public.mews_vitals DROP CONSTRAINT mews_vitals_pkey;
       public            postgres    false    368            T           2606    16941    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    302            �           2606    24896     mortuary_bill mortuary_bill_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.mortuary_bill
    ADD CONSTRAINT mortuary_bill_pkey PRIMARY KEY (bill_id);
 J   ALTER TABLE ONLY public.mortuary_bill DROP CONSTRAINT mortuary_bill_pkey;
       public            postgres    false    374            �           2606    24905 .   mortuary_daily_tasks mortuary_daily_tasks_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.mortuary_daily_tasks
    ADD CONSTRAINT mortuary_daily_tasks_pkey PRIMARY KEY (task_id);
 X   ALTER TABLE ONLY public.mortuary_daily_tasks DROP CONSTRAINT mortuary_daily_tasks_pkey;
       public            postgres    false    376            �           2606    24875    mortuary mortuary_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.mortuary
    ADD CONSTRAINT mortuary_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.mortuary DROP CONSTRAINT mortuary_pkey;
       public            postgres    false    370            �           2606    24916 &   mortuary_service mortuary_service_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.mortuary_service
    ADD CONSTRAINT mortuary_service_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.mortuary_service DROP CONSTRAINT mortuary_service_pkey;
       public            postgres    false    378            �           2606    24886 (   mortuarymaterials mortuarymaterials_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.mortuarymaterials
    ADD CONSTRAINT mortuarymaterials_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.mortuarymaterials DROP CONSTRAINT mortuarymaterials_pkey;
       public            postgres    false    372            �           2606    24925    notes notes_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.notes
    ADD CONSTRAINT notes_pkey PRIMARY KEY (note_id);
 :   ALTER TABLE ONLY public.notes DROP CONSTRAINT notes_pkey;
       public            postgres    false    380            �           2606    24935 .   notifications_alerts notifications_alerts_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.notifications_alerts
    ADD CONSTRAINT notifications_alerts_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.notifications_alerts DROP CONSTRAINT notifications_alerts_pkey;
       public            postgres    false    382            �           2606    24944    nurses nurses_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.nurses
    ADD CONSTRAINT nurses_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.nurses DROP CONSTRAINT nurses_pkey;
       public            postgres    false    384            �           2606    24954     nutrition_log nutrition_log_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.nutrition_log
    ADD CONSTRAINT nutrition_log_pkey PRIMARY KEY (nutritionlogid);
 J   ALTER TABLE ONLY public.nutrition_log DROP CONSTRAINT nutrition_log_pkey;
       public            postgres    false    386            �           2606    24963 .   ophthalmology_vitals ophthalmology_vitals_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.ophthalmology_vitals
    ADD CONSTRAINT ophthalmology_vitals_pkey PRIMARY KEY (vital_id);
 X   ALTER TABLE ONLY public.ophthalmology_vitals DROP CONSTRAINT ophthalmology_vitals_pkey;
       public            postgres    false    388            �           2606    24972 D   optometry_subjective_refraction optometry_subjective_refraction_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.optometry_subjective_refraction
    ADD CONSTRAINT optometry_subjective_refraction_pkey PRIMARY KEY (refraction_id);
 n   ALTER TABLE ONLY public.optometry_subjective_refraction DROP CONSTRAINT optometry_subjective_refraction_pkey;
       public            postgres    false    390            �           2606    24982    outpatient outpatient_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.outpatient
    ADD CONSTRAINT outpatient_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.outpatient DROP CONSTRAINT outpatient_pkey;
       public            postgres    false    392            �           2606    24991    package package_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.package
    ADD CONSTRAINT package_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.package DROP CONSTRAINT package_pkey;
       public            postgres    false    394            Z           2606    16959 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    305            �           2606    25009 <   patient_dietary_preferences patient_dietary_preferences_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.patient_dietary_preferences
    ADD CONSTRAINT patient_dietary_preferences_pkey PRIMARY KEY (patient_dietary_preferences_id);
 f   ALTER TABLE ONLY public.patient_dietary_preferences DROP CONSTRAINT patient_dietary_preferences_pkey;
       public            postgres    false    398            �           2606    25019 &   patient_document patient_document_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.patient_document
    ADD CONSTRAINT patient_document_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.patient_document DROP CONSTRAINT patient_document_pkey;
       public            postgres    false    400            �           2606    25028 4   patient_medical_history patient_medical_history_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.patient_medical_history
    ADD CONSTRAINT patient_medical_history_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.patient_medical_history DROP CONSTRAINT patient_medical_history_pkey;
       public            postgres    false    402            �           2606    25000 .   patientownmedication patientownmedication_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.patientownmedication
    ADD CONSTRAINT patientownmedication_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.patientownmedication DROP CONSTRAINT patientownmedication_pkey;
       public            postgres    false    396            �           2606    25051    payroll_log payroll_log_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.payroll_log
    ADD CONSTRAINT payroll_log_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.payroll_log DROP CONSTRAINT payroll_log_pkey;
       public            postgres    false    406            �           2606    25040    payroll payroll_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.payroll
    ADD CONSTRAINT payroll_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.payroll DROP CONSTRAINT payroll_pkey;
       public            postgres    false    404            �           2606    25062 (   personal_requests personal_requests_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.personal_requests
    ADD CONSTRAINT personal_requests_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.personal_requests DROP CONSTRAINT personal_requests_pkey;
       public            postgres    false    408            �           2606    25081 *   pharmacy_inventory pharmacy_inventory_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pharmacy_inventory
    ADD CONSTRAINT pharmacy_inventory_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.pharmacy_inventory DROP CONSTRAINT pharmacy_inventory_pkey;
       public            postgres    false    412            �           2606    25071    pharmacy pharmacy_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.pharmacy
    ADD CONSTRAINT pharmacy_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.pharmacy DROP CONSTRAINT pharmacy_pkey;
       public            postgres    false    410            �           2606    25093     prescriptions prescriptions_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.prescriptions
    ADD CONSTRAINT prescriptions_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.prescriptions DROP CONSTRAINT prescriptions_pkey;
       public            postgres    false    414            �           2606    25104    price_list price_list_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.price_list
    ADD CONSTRAINT price_list_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.price_list DROP CONSTRAINT price_list_pkey;
       public            postgres    false    416            �           2606    25113     privatetariff privatetariff_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.privatetariff
    ADD CONSTRAINT privatetariff_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.privatetariff DROP CONSTRAINT privatetariff_pkey;
       public            postgres    false    418            �           2606    25126 (   progress_tracking progress_tracking_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.progress_tracking
    ADD CONSTRAINT progress_tracking_pkey PRIMARY KEY (progresstrackingid);
 R   ALTER TABLE ONLY public.progress_tracking DROP CONSTRAINT progress_tracking_pkey;
       public            postgres    false    420            �           2606    25137 $   public_holidays public_holidays_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.public_holidays
    ADD CONSTRAINT public_holidays_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.public_holidays DROP CONSTRAINT public_holidays_pkey;
       public            postgres    false    422            �           2606    25151    refund refund_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.refund
    ADD CONSTRAINT refund_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.refund DROP CONSTRAINT refund_pkey;
       public            postgres    false    424            �           2606    25160 (   reports_analytics reports_analytics_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.reports_analytics
    ADD CONSTRAINT reports_analytics_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.reports_analytics DROP CONSTRAINT reports_analytics_pkey;
       public            postgres    false    426            �           2606    25182    requisition requisition_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.requisition
    ADD CONSTRAINT requisition_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.requisition DROP CONSTRAINT requisition_pkey;
       public            postgres    false    428            �           2606    25190    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public            postgres    false    430            �           2606    25199    rooms rooms_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.rooms
    ADD CONSTRAINT rooms_pkey PRIMARY KEY (room_id);
 :   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_pkey;
       public            postgres    false    432            �           2606    25210    sattfaddress sattfaddress_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.sattfaddress
    ADD CONSTRAINT sattfaddress_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.sattfaddress DROP CONSTRAINT sattfaddress_pkey;
       public            postgres    false    434            �           2606    25219    scheduling scheduling_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.scheduling
    ADD CONSTRAINT scheduling_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.scheduling DROP CONSTRAINT scheduling_pkey;
       public            postgres    false    436            k           2606    17075 $   security_access security_access_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.security_access
    ADD CONSTRAINT security_access_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.security_access DROP CONSTRAINT security_access_pkey;
       public            postgres    false    316            �           2606    25251 &   session_planning session_planning_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.session_planning
    ADD CONSTRAINT session_planning_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.session_planning DROP CONSTRAINT session_planning_pkey;
       public            postgres    false    438            i           2606    17042    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public            postgres    false    314            �           2606    25339 "   staff_document staff_document_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.staff_document
    ADD CONSTRAINT staff_document_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.staff_document DROP CONSTRAINT staff_document_pkey;
       public            postgres    false    454            �           2606    25356 .   staff_financial_info staff_financial_info_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.staff_financial_info
    ADD CONSTRAINT staff_financial_info_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.staff_financial_info DROP CONSTRAINT staff_financial_info_pkey;
       public            postgres    false    458            �           2606    25367 *   staff_grade_levels staff_grade_levels_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.staff_grade_levels
    ADD CONSTRAINT staff_grade_levels_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.staff_grade_levels DROP CONSTRAINT staff_grade_levels_pkey;
       public            postgres    false    460            �           2606    25376    staff_group staff_group_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.staff_group
    ADD CONSTRAINT staff_group_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.staff_group DROP CONSTRAINT staff_group_pkey;
       public            postgres    false    462                       2606    25493    staff staff_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.staff
    ADD CONSTRAINT staff_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.staff DROP CONSTRAINT staff_pkey;
       public            postgres    false    484            �           2606    25385 ,   staff_qualification staff_qualification_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.staff_qualification
    ADD CONSTRAINT staff_qualification_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.staff_qualification DROP CONSTRAINT staff_qualification_pkey;
       public            postgres    false    464                       2606    25397 "   staff_referees staff_referees_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.staff_referees
    ADD CONSTRAINT staff_referees_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.staff_referees DROP CONSTRAINT staff_referees_pkey;
       public            postgres    false    466                       2606    25406 (   staff_suspensions staff_suspensions_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.staff_suspensions
    ADD CONSTRAINT staff_suspensions_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.staff_suspensions DROP CONSTRAINT staff_suspensions_pkey;
       public            postgres    false    468            �           2606    25274     staffcategory staffcategory_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.staffcategory
    ADD CONSTRAINT staffcategory_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.staffcategory DROP CONSTRAINT staffcategory_pkey;
       public            postgres    false    440            �           2606    25283 (   staffcompensation staffcompensation_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.staffcompensation
    ADD CONSTRAINT staffcompensation_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.staffcompensation DROP CONSTRAINT staffcompensation_pkey;
       public            postgres    false    442            �           2606    25290    staffcontact staffcontact_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.staffcontact
    ADD CONSTRAINT staffcontact_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.staffcontact DROP CONSTRAINT staffcontact_pkey;
       public            postgres    false    444            �           2606    25299 "   staffdependent staffdependent_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.staffdependent
    ADD CONSTRAINT staffdependent_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.staffdependent DROP CONSTRAINT staffdependent_pkey;
       public            postgres    false    446            �           2606    25310 &   staffdesignation staffdesignation_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.staffdesignation
    ADD CONSTRAINT staffdesignation_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.staffdesignation DROP CONSTRAINT staffdesignation_pkey;
       public            postgres    false    448            �           2606    25346 "   staffeducation staffeducation_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.staffeducation
    ADD CONSTRAINT staffeducation_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.staffeducation DROP CONSTRAINT staffeducation_pkey;
       public            postgres    false    456            �           2606    25317 $   staffemployment staffemployment_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.staffemployment
    ADD CONSTRAINT staffemployment_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.staffemployment DROP CONSTRAINT staffemployment_pkey;
       public            postgres    false    450            �           2606    25328    stafftitle stafftitle_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.stafftitle
    ADD CONSTRAINT stafftitle_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.stafftitle DROP CONSTRAINT stafftitle_pkey;
       public            postgres    false    452                       2606    25413    supplies supplies_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.supplies
    ADD CONSTRAINT supplies_pkey PRIMARY KEY (supply_id);
 @   ALTER TABLE ONLY public.supplies DROP CONSTRAINT supplies_pkey;
       public            postgres    false    470                       2606    25420    surgeries surgeries_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.surgeries
    ADD CONSTRAINT surgeries_pkey PRIMARY KEY (surgery_id);
 B   ALTER TABLE ONLY public.surgeries DROP CONSTRAINT surgeries_pkey;
       public            postgres    false    472                       2606    25447 &   tbl_doctor_level tbl_doctor_level_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.tbl_doctor_level
    ADD CONSTRAINT tbl_doctor_level_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.tbl_doctor_level DROP CONSTRAINT tbl_doctor_level_pkey;
       public            postgres    false    478            	           2606    25431    tbl_doctors tbl_doctors_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.tbl_doctors
    ADD CONSTRAINT tbl_doctors_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.tbl_doctors DROP CONSTRAINT tbl_doctors_pkey;
       public            postgres    false    474                       2606    25440 0   tbl_doctors_specialty tbl_doctors_specialty_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.tbl_doctors_specialty
    ADD CONSTRAINT tbl_doctors_specialty_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.tbl_doctors_specialty DROP CONSTRAINT tbl_doctors_specialty_pkey;
       public            postgres    false    476                       2606    25457 ,   tbl_expense_request tbl_expense_request_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.tbl_expense_request
    ADD CONSTRAINT tbl_expense_request_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.tbl_expense_request DROP CONSTRAINT tbl_expense_request_pkey;
       public            postgres    false    480                       2606    25467 $   tbl_familysetup tbl_familysetup_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.tbl_familysetup
    ADD CONSTRAINT tbl_familysetup_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.tbl_familysetup DROP CONSTRAINT tbl_familysetup_pkey;
       public            postgres    false    482            V           2606    16952    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    304            X           2606    16950    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    304            a           1259    16992    jobs_queue_index    INDEX     B   CREATE INDEX jobs_queue_index ON public.jobs USING btree (queue);
 $   DROP INDEX public.jobs_queue_index;
       public            postgres    false    309                       2620    16449 "   accountsreceivable set_last_update    TRIGGER     �   CREATE TRIGGER set_last_update BEFORE UPDATE ON public.accountsreceivable FOR EACH ROW EXECUTE FUNCTION public.update_last_update_column();
 ;   DROP TRIGGER set_last_update ON public.accountsreceivable;
       public          postgres    false    218    485                       2620    16471     ambulance_booking set_updated_at    TRIGGER     �   CREATE TRIGGER set_updated_at BEFORE UPDATE ON public.ambulance_booking FOR EACH ROW EXECUTE FUNCTION public.update_updated_at_column();
 9   DROP TRIGGER set_updated_at ON public.ambulance_booking;
       public          postgres    false    220    486                       2620    16480     ambulance_service set_updated_at    TRIGGER     �   CREATE TRIGGER set_updated_at BEFORE UPDATE ON public.ambulance_service FOR EACH ROW EXECUTE FUNCTION public.update_updated_at_column();
 9   DROP TRIGGER set_updated_at ON public.ambulance_service;
       public          postgres    false    486    222                       2620    16490    ambulance_table set_updated_at    TRIGGER     �   CREATE TRIGGER set_updated_at BEFORE UPDATE ON public.ambulance_table FOR EACH ROW EXECUTE FUNCTION public.update_updated_at_column();
 7   DROP TRIGGER set_updated_at ON public.ambulance_table;
       public          postgres    false    224    486                       2620    16503    appointment set_updated_at    TRIGGER     �   CREATE TRIGGER set_updated_at BEFORE UPDATE ON public.appointment FOR EACH ROW EXECUTE FUNCTION public.update_updated_at_column();
 3   DROP TRIGGER set_updated_at ON public.appointment;
       public          postgres    false    486    226            �      x������ � �      �      x������ � �      �   �   x����J�0��O�"/�qr�,5w��R*�l�Hu�(�Lj��M�8/d�s�_�|�|'|Aә��C���%dժ&3��o�yW݂�4D��c�c����BR��r@c!��>����G�zh��'DqfO�V�]�F~��w�P�ԥ��<�K2�r�c�\����p�|��WS/��Z�1/8�,�(��eG}�$l�r�֫��:��ñ��_� d:���uCa�����Z��1��py      �      x������ � �      �      x������ � �      �   2  x����n�@�W���a �G>;�њ&�ԒEl�t�~���MS��y��yO*�8�?����=�GF~O��/C��l�{RfiQ���$ �A�$�B�Y�d�QOR{�d	#K I����[�:��
��(��J��Xm�B<����!l��9���� �A[�c�t}ȓ��^�}��?)��QY�l)�S�X�kFe8Z'3��7�g�p�Eh4�]�u��;�1Bu��n���͚�d�9ٟ/|���E�gu�����]D�̌�H0�h`x�o�I�;��!�J|���͚�FQ�ER&yŮ����#��.;&e���5,�I��Yɛ5���=0�E;+�t��,� ��#$�A��#û����#09�a������Yɛ5��I���A�c�/��)>b��ie�Թ�PW�� 0��qz��1{?��%:V�mP��7kZ��,��{��0lj 8��ӊ���pk�ߥC� �X�w]T�*쵒7�����gU�W�cg�})β}V
2KZ E�'G�з ��'^�",��O{M�J��|��iQ|\�e�ϊT4�����]`L>��}�����چO�g`�� �<�N��X�;��J���)�h�]�غ��1�'C���u�_��I��|�f��+�ml���L�����D�p�m�o��LO*ՂؖͰ��R�m����Ȼ������zS'�4)7�Řy8��
&� se��������g���ڞ-�%�Pl�AW@��������7�x���@�1�M��h�_�3AzU8����/|�*�Zɛuk�U���-.��� ��C��      �      x������ � �      �      x������ � �      �   E  x�m�]r�0���)|�&����xj,�6i����ߢZ�<�]�d�����Y�-�4MOi
w�d��Ϣ�x����S�!kVX��M>���F43��W,k@Ӓ�4�!����qho�+2A��+,���:��}�@9(G��;T���t4�a�j�*�Zl��'	�y	�ۣN���߄m?�2���8�^^bY<�����c��^a$�^l��TY�f�M�SR��A��&����2��h�Z)&98%_�u�j{��d�%U�XR��R�h<�e8����9:dV��z M��G��G� ��ڂ���$�79���      �      x������ � �      �   �   x���1�0���\�.���B�Aq	%ԂF���K�Jh'�oy>��^���
O�8�[�Q���%��sإp��p��9Չ4K*�n����u��%��;��#�[H��]
w��[��[�:X�O���B�70�>�      �   �   x��ѿ� ���)�m��������I]��&JM�ҷ��bR�:���������H��9�ֺ3��<��vI����XFlAD�� H�_�HȔ�!�C�����a��(C�����v�G�� ����՗XB!�Kk�מ�Q��'����<T��*Fܣmm�-X��L��9C�'@fm�      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   �   x�m�Qk�0����S��$1�6OEf�u���%�iɬ	lZq�~N�X��q��]�:�[�v���x��V���z"�v��,�Co�5\�@�:�q��Yێ���O�θ�	�lC8O災�~���f��ĔƔ#M$#R�G-J�ΫZ���_�?9�K;ban�c�ˀ[�O�.�Oo�|v͌���5,#)��|M����񘈘m�
I�$����E�%�f_t\EQ��0[:            x������ � �            x������ � �      �   �   x�M��
�0�ϛ��Dv7i��T�@�HAn1ئ "��&`��f>>�`;���F�px���o��r�B �pK�|+p|���"����Q���%g�f���=D���G߆��v6T ۊx0�[����1I_jN�2P�H)���*N      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   �  x��TMo�0=�b���n��y��,�8�=��d k;k;����BA밗 �7oޛy����s��ü����90�sSU��^�R�6�J��^�v���4T�F�.B9�ye�W�c� F,��%m����o���h�q�_('u�ےb-'7-/�Q�)<Q��,d��,��/�6ʷ7�䑱��b�Ãg���$�0�5��:o��>*gl�+���
�Σ��7JnU�O����=���~�°��r1���#�+.���IǷ�3J�WL����WA��$Ӏ5Ny\��W������(�R�N��k	,��W���a��3ux^A8�F��J�2�u����Ji��)�����R;π�ѝ��cx�j�l�y_��7ƹ��)��5��xB3Fr��������V�Tg5����¹�<~� KG�e��A��ǰ)3Je�6����g�w��D�NG�d)m�ѝ����`����+      �      x������ � �      �      x������ � �      �      x������ � �      �   �  x����n�6���O�X$E�lg�I����٢E���h�k�4(:Y��;�9۠�E
Ȁ%r��o��a��M�p��� �K!`lݪWYR >w�U�M���U�3��[��mxD��7���ʹ�c��V�����p�V��޺��/�����^%0�*��OKst�/24m��S�\P
w�y=�҄C�L9���������֫�q��V�Z[�g�t�W�)��0^�46�:mHp�[f4�м����7Q�J���ÀC��k��9"Z�1�[�ri��!2�q�t���{+��_;ْ-��m��^�p%��[i�v�70]Y� ���N�]��$��=I��<�F{	��iC����,g�7���*r�71�����1FFO��?#GV
Z�|*�x_�Q� �<O|��׋sZh�џgp��sb#�[��>i�S��R�����K�'�{X�|n��"Ϣ41��:r��@��Y���P������N��Fa�|&�E��D*�P%fu��"!��H�Ϡ��VP0\+�<z/�KV�v�������T������)��y�I�{I}���w8]�u�i���Hm?�W�i��`k�L|�/Xm��f�-,9���k����֭ƻ�����i��WŎ��)���/�m^�7�*+T2�^w��؋0���_�[�a��Aq�Kc2���˵���ýd�-h�R��f'S�[��fi�GW[��'b�0p����*��7؜�FK�ÃS������g[����A}�?7/�m�H����%��(Q�{a�)AW���"����O@��2!D�{�c�}�5f�����xh�8O1�F�`�di���R��Z�M�)��0=7mkpB�fE�(ٵ�{��<x���rs2�T-��
wJy2��\�֟�]��d)��4�����U=;L�/�z���b��[[pd֣g�E3m��Ds[��B���9��� .���ū��N�t;�YZ��ӳu�K���8��t?x�?�m      �   #  x�]SA��0<ӯЩhmc;���2m�E������QR�n�����=`B�e�|��`�TB.r���U3#Е�׬��G�q��6���r/0��C�>�'XP۰�$yѦ�>M_5�`�D���*IK�������z�I.�ۨ~��F�c�Z�r�DU����*9��ᴅd�b	��v~_���������]	cY��,e���b�X��v�m�}W��y �a���=�+ʆިN�*bI���.J� #hg,��r�,u��)���d4�O�N@��.�x�M��^�ya-a�`*��o����\�SK�a	��&,z�Uݡ��n<��p�.;}�mzU+������Tև����8l�����q�!�r����c��V9�3�r�u����
�{(?�Do���I٘N�E(��Dr��V�����)]�p�vћ��7���JU�=Π�l��5���悱; �y�~�����.�G��~�,Sn��ݓ���\xS�Y4�9Wɫ�/��o
��QH���������\      �   '   x�3�t����tv��2�tt���C�C<�\�b���� ���      �   l   x�3�.HM�L��,.�4202�50�50U04�25�25�&�e�霟W\�S��G�&cN�Ԕ���������"�u�pdTg�d�%T��ߔ3(�(U�7��qqq &�Cr      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   4  x��V�r�8]_�«Y3��<��<:ݐ΄Lg���0T-KY����# �G��n%�����^G�3�<��F��Z	����0L���Y����`"���z#���5�1���"�.�Ƥ�i&,w�5F�'Ef�Lh�M��p�_�<�a=j�E�FH7�v�^AmP�z�Y�D*%�ϳ�P�X�C~P|eF�t�o�/�o<�G1�}߭�R<H�Q�S�2NjMjR_8i��w��N$4Z�"�8����sv�N��t��hӋ�Y9���ifN��dBK=���P���)��A��|.�5
���ȭz�	��w�0Ԣ���%�w �L�sI���Q��w� ������<m�H�q�s\t���C�����Td�o4|�R��D�!�rg�Xh�� $�/=��g��409��k�綤��ep��>|���J�P���a֤�<�wg�:����N=��W�޸j$Ӄ�c��6/��z�}��k��P=5)`F$�����=�Wh2B�ɧ	�QXD���GB}YO�I�X��o�T�P&�lO�n��O�d��G��C��qP?��I����ŶǱQf�JC~�ȆO�t^A�	54�	U���B�ť=�������{U>����������L��f&�Fz�Jg�&��p��'�;��� 5>0�n��u��C�|VL�İt+������Oܐ^��a�]Bal[pyn칖g>a�>��*���K���Yq�������QNYL�U9E| d.5Z�"����d�]�$����*����2�����V|Y�_�/�~T.���B�-�S�|"�)���1b�'��
�S-�Lˡۤ��l�&�3]d��������˹���⟪`BT�(3z��9x��Jؒ�}6_Œ�jv�ߪh�����F|_F�}���3��qU>Y�Pwy"W?��X�#���)�9���Ľ��:�z1yq�}Dș�u�E���*����i��⟯�+O�	����l°��Ͽ&f�PoB��YKG~�J�� �V�﫨7ng�#�M��iy���V�/Ub����BN&��tW�����j� ��      �      x������ � �      �      x������ � �      �   R  x����n�0�������6H��m���l�T���	n�F`ZeO?�Ҧٺ���c��96I
:E�{#}�<��L��;>����χ��j�� �,���!�$0�ف

S�2�`\Hzl�O0\u%�@�A,��s�@�p{�jZ1�a�i����JvWz�5�S-U��:�B�[�4H��~��t�\_V��(H��~$?�.
3@\�$�u�C�w��I�_��&�W�r������&zo`��B��\�=okV�1W�n?��a��U�n��[��gq!vYX��`��	�8	 �"4!`��e쏢\�T��)X�#+��WR4T�(cc����L�@��\�^��� �;*�K���,/��,�x_��sڨ�e�-v���� ��R��?+.��ym�3�-kk*�P�GoB��\��sl��ī<`����K�}�����)����N*�ˊ?��m}�������RQ���D
i�4�U0mX�i������Ivf��m�&A�Gq�0ʂȋ�`L�4|�l�n����wL{��y�i����c64c�ͼ���3u4��Z��b�˼8�f:�L~H|B�         �   x�=�1�0���9�/ p�J,�Ub`�+Xj\H�Jܞ�����	�L��O5�&�d,�ePE������*4\upg�]�7&3��)�Te줌��ni��-�@?�Le�,���� cY��2Ȭ,�[���Ԫ�`p��s���?�            x������ � �      	      x������ � �            x������ � �            x������ � �            x������ � �            x������ � �            x������ � �            x������ � �         Q   x�3��4�ttrV��+.-J�KN���142615�4�30�2��4⌈�BUanai`hQa��i�	�u�Ƀ��[@�c���� M��      !   �   x�u�=�1���)�Ax�/13q���]��ϱ������'�P���V��"�"toI��%ׁ:d��E����]l@H�r��g{��lA[��7_��(+ܬ��h� �����y��!~ۃ��X&.�x_@�1?����|�#���¼:�N#�!~��ѭ?�|翕s��5Z�      #      x������ � �      )   !  x�]�͎�&���)�����0]M�?����Z-��Q���9�����ܟ�=�������?_:AGF��������������ۃ��}C���d\4�Tt��N��,z2J���/FiR�Ҵ�TZ�C|��HR��%gCC̲$�fw��W捻b����T�XH5�%m�FJ�������^�ɧ3���5Үg��/��ׇ<����u-y���,����<K�]B޸����(�'�.2�4K�вmJn�YOl��D����4;7!�-�����E��lA��L�2�-��#�u��� eem�0�G���`*�;Md�=%{�3Be�{��f��X�;:l���3��(n��5r�R�/t�I�t�<\09����f�&��RPb0%Jۈ��j��]a9r�k�����,�����³kѕ諆}�*1s�ˍ
9�1��ѻ/ �m�����x#:������-�G���ճ���p��8Kׂz8����z�E���(�V���}�(cଃQ�Wc�߱Y~�����e6-æ�h�V��Z��k�T�"[z��T�D�eu�Nƞ�+8������PxF��|K���ᤖ
���H+�%���Ì7=��6 �@A��m�-ܜ��|Z��b�)��mU�_a�"j6v�rEN�(h<ؘ��k�q�5A������bqX���4��h�/���}��x�E��9�z����Xa��v6�D�;�z>�'��l��-(RL^�|Y6X<�ɘ%� >�(��	�ǭwײ�P��~��I�?)ȭ���0��?~����B��~���Ζ��      %      x������ � �      '   �   x�U�=O�0E�_��c�1YQ�TH�H-��<��-�cȿǘV���{�{-��Ћ�q�c��%o�/Y��aG��0���Z�����S��)x��d\1���Bv!��*��^���GeӗV������u�>��b*⫱���=g��3Lv&��xdh+$��\�I��H�[ȸ9���u#w������Vz�%1pI�=�G�FNA�j�a�@&\�V�xW��wd��S}}%1��|>6M���j�      -      x������ � �            x������ � �            x������ � �      +   b   x�3��4�t���OQI-.���/�M��4202�5��50��2��4�-��K�(qL�CSd��e��i��[�X	4B!���4�X!-�4/�̘�+F��� ��      /      x������ � �      3      x������ � �      5   �   x�u�Mn1F��)rJ`�kQwE ��e j�HCZ��ۑ�c����=�6�J���G��	�j���S�_�%�>����n���(h���`���.,o'Co��&Q�]N�鄉�A�XRK����K��x�����$�cX�1S��pv��J�&�1�V�	�r�Ԣ��:��ZƳ@�����)��b�)�|�~7NL۶cX���S{�,c���"�]��      1      x������ � �      7      x������ � �      9      x������ � �      ;      x������ � �      =      x������ � �      ?      x������ � �      A      x������ � �      �   a   x�e�K
�0E�q�IR�B-�����:���"��=��5�*�i69ü�#�
R�1�E?�+�ni�[�ȭ`/��~��L��t�05 pb�1�      C      x������ � �      G     x�͓�J�0�ϓ��t�����MO"t]н� �����R������ja�K���~3��G�(�$�(C��J!�bҟ��v��u��������h��e�`R�:����gDW���mlͷ�����Y�9��nH���m���A(�R�02"f��,�-&�����A"��16!%Xy^�iZA+_��"_����'�ne`4�E��������|�c.#ɐd��B1����IB��:K��g����ں�~��rfv�>1����?�j��=mc2Md      I      x������ � �      K   \  x���=o�0��_�� ��lP��*R�.&���������N��K�D^�G~���O��Kkɵ�39�u	��o�����%��n���SΦB%�g�el�(���^� Ҹ�/�(��V�>�Y^�{��/���,�F5���X5�$�`La[S���E��¯4Ћ�^)��{�R�����.\KN���I��`\����b&�G���,�f�_<�q�</L7d���>k[:�3d�%#9�R�~&����
uuF�4W_E0r��=W�d������P�;���u�Im�)NH���w��i���\����N@�r=T��c�j(p��,' �c������0����@?�      E      x������ � �      M      x������ � �      O      x������ � �      Q      x������ � �      S      x������ � �      U      x������ � �      W      x������ � �      Y      x������ � �      [      x������ � �            x������ � �      _      x������ � �      a      x������ � �      c      x������ � �      ]      x������ � �      e      x������ � �      g      x������ � �      i      x������ � �      k      x������ � �      m      x������ � �      o      x������ � �      q     x���Ok�0��??E�����VssmV3-*=��a�
n+�~�Yg�2�.������E*�O3eJ�c`������r��c�������eM���Vj�)t	d�D�����&��
�����5���\#�v}t�ǩd��\������Z]���mQu8��Xר{�詩Ψ��{v�tBϭ��Ŭ���ܰ�6�����̍\�*WE��z�޷�,ŧKŐ�ڔʤf�ЃR�B!�D80W�@��J��n���!&=F$�t!	����g����E��W      s      x������ � �      u      x������ � �      w   0   x�3�4202�50�5�Df�&V*�$Vr:&�d��r�:F*�d�b���� /&�      y      x������ � �      {      x������ � �      }      x������ � �         �  x�uUێ�0}��_P�~y�	,H@(�J�������V�}�8�x�<g�s=�P`y�D��V��N�����j�� ��GZ���6h�|��-ڶW">��N:غ������T����6��)f������F�5oe��.�a��Ѷ��Q�~ ۛD�Å6a*t�����@m���ƀ	TWEu}�6�@9�a2���MR��D��P�Òh�;aE<X�fF�a��^���Q7:b�JJ��
"(tK%a��7�aF/�l��큚=A��V�K����\�PslO9�ED��{rzR�����YU�����!ea�F0����5�0�5����0�y�3R�I�
3�JY䏪nm�AU��+ʻ��f����|=�F�L�fQ�����Cٌsņ�Δ���,���0��M��ڕ{@��mn��[������3�-Z�l�R�ɢ7�}����9(���g.u2xr.}
?Z̨��������<�8������r��hɏb:�xνj[����I�_��V��'�����z�T����0�%݁U/�PL{I��r�U��1�O�ɐ�PVŮ� �|�r���~P�v1_͋������B�������pO�	���Η�����eP�:��n��6���p|      �   D   x�3�4�440���K�I�t,K��IL�I�2Kq������ɥ��)\�`qc����d�1z\\\ 6E      �      x������ � �      �      x������ � �         }  x���ɲ�@���S��E��PQ���
$��F� (��Aѧ���Pu�;�V�����wN�!a��qFݿ�S�0��4�}����`��l��e4��N7ɞʚ��G39[:���{Zn�x\�J�[�|�(! xU|
>�4ՠK���k�K�ȱ4WЁ �I[p��t��dY�R��<�(1^h,�i���$�vOB����S����NV�b�^�;e/�#r�S���9k�)?�mF�F(��Oڇ�]^Y3J�`�� !���f*�.�,��4��}쉸�p����I%���]�n����c��Ft�t؝�&ˡ�u�u�5F}�d�`� �a�A�\�u�� �FE~~gD���&za׳~�����D&J���^{��Z��+�o.e������ڞ(,Pm��޽��:�ee^^�]ԙ!��-9hfC�i����ZDq�Ζ>H�����	=G�خ8������P�'�]���+?�r��5̴w���ej��t%�`~���L��F&�JP5������g�.pD)E�C΁�np��/|�t���r��e>�w۵r���,�Nm}%���������:�Y��B�UA��>��~�]R��6��ݲ�5 ">�>5J�w�����$����@��afJ���¹/l�	룤�+���v�N�1�ɎvHK��eu�M����uz�
{�4ń{��D��ܫ� �W�ik�[�˶#^���`M���0�M2�;X-�'�.�U�0\����6�Ճ�n}�dI�=��俠H�d�-���Kj$I~~���&o>��i����Q�l/�-�6K�� 4XYⴓ�a"Q��ɡ9���jN��
_ɧ5N��B	eY8�~�Ng侻�Ǚ��M`h`᪈�SV]�W18>�l�0� �����6w���4)�jk������u�u2��`�_f�TfYS1��k�.��M2Tz�����˂�&n<��N�*/�W�iϬ��D��˽@s1
����fä��Z\�æ�h �����LL|���<u��mG���k�/yC����ń��C�14� ��_��?��r����v�̜��A^��F��lW���z�ʫRT�Z��1� #�c�NJ��7$Q��Z$9�����'n?��-j�=sfj��L~!s��̾33 �i��.��]Eȩي�-s-�Sm�JԳ`wq.��h�՜���AX�Jb���j���/g���{^��L�~�d��I��9]-ոs�$��ds�p�b��$��>?�к������ˎ��ڲ�u���F�Pu�r����"���b`}Z��W���vKm�Rp�bn�4�<Ʃ.��]2N��&��'��<��ѼҖSx�t�Ӏk,�� ���f|Z���Ea�n2EJ������$��$��		"�D6A ;�C��;ay�)��I�{E�V�!mOi���g��|�ǉG�~�:.�Bi�兾ϫ���b�H�T�a�'H�e��P�@H��B��v��FL�MY��.�����I;73Ԭ|'�P��g�����<Q}�Yb��Du����4K��{��iei�E�I��D�l���X��U��6	��e!͋���+��G7RV�Ah/�u�nε%i�ŝ+/G��'���5�V����y�j�a�kKx�'7�����n�Z�� ��      �      x������ � �            x������ � �      �   C  x����n�0���S�Jd��NE)U�T���\��lG`ڦO_�Us�j�Վ�0�1H�9���q`S_�Yh}%D�a��g�G����FA�]'Ea�������wAPW$��p��i��)�Fy��n��0N�(�MDvi\��I��5��vBX�U��pG2-m_#�[�}��Kl�^�t��9<
�� N�ܥ�Uy���}?fڧ�5��!=��4�ů��O��,�W�4��<&8�Բ�g�k1�-ks�J.�qL? 
Q�Z�����$l�%��d� ����W}N�ڥ̥ވZ��S>V�n �ck�M�y�����9���8�_ѕD      �   �   x�����!��zހ�OF�+(�>�ED��F*�E]�'Ӧ` zw�y��P���SR��������G�=X��U���b�&%|	���l�ـq�QglCĪ��jz��FX��@�J�%t1��h1p^?5��B�Z��f�v`u���ӛ�OCD�T
�� o�^̢��K�Fw6M�Yn	_B�S.�mr�W���2I�$���CB��*rs      �   �   x�m��
�0���S�Z.�4�mq�Q�PR*l������w�s�'`Jv
�� eb�l�GL�>��}o@rͶ>��%ˏ.��.�������RUZ�`�O����j֌�;�k�į�Ź1�7�e��>�.������>L��
4�_���F	#������:q      �   �   x��б
�0����S�J.����R�.]�j��X�����B!n���q°l�:�#�Ѝ֟1^a��Z��BE�g��)S�X����qڗ�XKqp��PZ���i�c����B�[,�r�AN����x߷t������r"��(���)��      �   B   x�3�t����tv��4202�50�54U04�25�26�&�e������.oje`�M�+F��� �f
      �   �   x�u�A
�0D�?��"mZ�.k)�1Vj�MH~I ~�	��(�t�lg�c
QM/���N��D^԰Zأ��f=��A�>5��y�E��;bb�8���b��-)��t-�!i���/\.��{��p��-���߅5\�D�6;c��b�� T9F      �   �   x�3�.ILK�700�tΨ��J�˫�ru�u���00s�t*�/�H-�f:�ff�*�W�'gd�rz�(8����$�p�+����)�'�(�zsj��(X��+����������������������	61�=... J '�      �   [   x�3�,.ILK�54000�t���K�JTpM�O��4202�50�54�3�9}3����RJ�K8�K2�R9=�RR�2�2KR9�R+��b���� �w      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   �  x���1O�0����X���Ii��jAt��ڌ],��XJ��q���PA� �)'�Ͼw��J�<a)o����tM�QB�4cӌ��a��N��,��s'���o�,KfC5��ZY4���Y�C�k$�G�%���C�_���!&�P�L�Qw����Ey�Jv�p��՟|�Aje�w��jd�ZbE�_P�o�mUI������8l>d,�q���,�����ڶ���Dm�Pqta=Hŕ[s�zdŰ�U�o����V]�X�%I!��E�膄/1���&��ޅ���J+��~l�0���6A�;xo���݈[���;~��A��sgi�~��_�%7H�
���cck�V�vfx3�W��&�"Xt߷�6��[�Y4�Ű��;Gu��*�n��q�B..�L��pKy�_R�      �      x������ � �      �      x������ � �      �   g   x�m̻�0E��o
 َ� �|*(�e�9�((����'4D�j=�S'�b�����12�V��<;[d0Z~�j�%2d:�:}�C�y_߾��$����� ��b3�      �   d   x�3�tO,�J�440�ttrV�MM�LN�Q.-(��L-�2�tJ�KILO-�4����R�HM�)�HN,J�2�.-J��M,�.�4����Z�_����� E�      �   `   x�E�-�0@aݞ������84flu�O!���ͽ�}�	س8���kkZ�Ƨ���a/�ӡ�BԬ�A�F�؂�e!%�;���猈?�}      �   B   x�3�t���	q��2��uu�tv�Q�ws�tv�2�rrU@Rc������������ 3�      �   w   x�3���M,*��Sp�K��O���MM�.�/�.6tH�M���K����p�ut��407063174���tN,J����O�,.�tL.�,K�t���	q��L-�t
v�tL�"�b���� c�#=      �   H  x��UKs�0>/�B���Ƽᘱ�3I�ɣ���`�h
#����.`@��Г����o_.l83<�T�����L��iN�V*��'p�Qm�6�3�ܳW���	?R�[��%8\�G.y�\İ�ʒ��lr�h�3�P��S
�\I��׌j���u�QE����f�㺰�eYn�c�09�%���桭��lE�W~$�MɆ�!�\
F�R�0��6 7��d�d��A!3H�~��Q+��}d��
��l��V7�=�n���,���gՌ
o�
�䉬!6ɋw=�3���Y���f�ȷ`��(3��N0�����D��j�$���E�0&�����M��f���#��j�a*���lo� Z/���q�os~��ȩQ�L@�hC��X���^y�-��\?Ma�H�R)��D9��?�--��n�y���L^��a���H=��OaA5N�j��\��>wr�96�姝�����C6�|KӠ����tZ|�Q�eW�'�:���w��#H`'K6�$Ha�TL=�.���Y����E��Bx���������'X��x��%������z
��ve�q�Y�pK��CƇ��s6�HW��{�+�j}�2>+����q����v߄)�G2Z�0������I���Yv&T��ϲ��m��᭔� �b�(�}����r�E�N^����	�EjR�n�:����jfC�]�-�x�F�Y�?�M^8�&�;C�P���A�=�/k�LW��T����Ym�|��Cź:�	X��d�ZY�����/���������h��j�ğ���$���"���;e�7~s�kK�      �      x������ � �      �      x������ � �         �   x�3�I-.Q-N-�,�R+srR���s9��Lt�t�,-�L�L9U�*U�T��<R����3#�\|��"2RR=��r��#��R���B\}�-�2�K�
��Cs9�Rӽ���*3��m�M�+F��� �,�     