import { adminPath } from '@/lib/adminPath';
import { Link, usePage } from '@inertiajs/react';

export default function PaymentMethodForm({
    form,
    options,
    heading,
    description,
    submitLabel,
    onSubmit,
    cancelHref,
}) {
    const { url } = usePage();
    const cancelUrl = cancelHref || adminPath(url, 'payment-methods');
    const supportedChannels = options.form_channels || options.channels || [];
    const channelLabels = options.channel_labels || {};
    const isBankTransfer = form.data.channel === 'bank_transfer';
    const isCryptoWallet = form.data.channel === 'crypto';
    const currencyOptions = isCryptoWallet
        ? ['USDT', 'BTC', 'ETH', 'SOL', 'XRP', 'BNB']
        : ['USD', 'EUR', 'GBP'];

    const switchChannel = (nextChannel) => {
        form.setData('channel', nextChannel);

        if (nextChannel !== 'bank_transfer') {
            form.setData('bank_name', '');
            form.setData('account_name', '');
            form.setData('account_number', '');
            form.setData('routing_number', '');
            form.setData('swift_code', '');
            form.setData('bank_address', '');
            form.setData('reference_letter', '');
        }

        if (nextChannel !== 'crypto') {
            form.setData('wallet_address', '');
            form.setData('network', '');
        }

        form.setData('currency', nextChannel === 'crypto' ? 'USDT' : 'USD');
    };

    return (
        <section className="max-w-4xl rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
            <div className="mb-6">
                <h3 className="text-xl font-semibold text-slate-100">{heading}</h3>
                <p className="mt-1 text-sm text-slate-400">{description}</p>
            </div>

            <form onSubmit={onSubmit} className="space-y-5">
                <section className="rounded-2xl border border-slate-800 bg-slate-950/60 p-5">
                    <div className="mb-4">
                        <h4 className="text-sm font-semibold uppercase tracking-[0.18em] text-slate-200">
                            Payment Method Type
                        </h4>
                        <p className="mt-1 text-sm text-slate-400">
                            Choose the payout rail first, then fill only the fields needed for that method.
                        </p>
                    </div>

                    <div className="grid gap-3 md:grid-cols-2">
                        {supportedChannels.map((channel) => {
                            const active = form.data.channel === channel;
                            const label = channelLabels[channel] || channel;

                            return (
                                <button
                                    key={channel}
                                    type="button"
                                    onClick={() => switchChannel(channel)}
                                    className={`rounded-2xl border p-4 text-left transition ${
                                        active
                                            ? 'border-cyan-400 bg-cyan-500/10 shadow-[0_0_0_1px_rgba(34,211,238,0.2)]'
                                            : 'border-slate-800 bg-slate-900 hover:border-slate-700'
                                    }`}
                                >
                                    <p className="text-sm font-semibold text-slate-100">{label}</p>
                                    <p className="mt-1 text-xs text-slate-400">
                                        {channel === 'crypto'
                                            ? 'Store the wallet coin, network, and destination address.'
                                            : 'Store the bank account instructions users should pay into.'}
                                    </p>
                                </button>
                            );
                        })}
                    </div>
                </section>

                <div className="grid gap-4 md:grid-cols-2">
                    <Field label={isCryptoWallet ? 'Wallet Name' : 'Method Name'} error={form.errors.name} required>
                        <input
                            type="text"
                            value={form.data.name}
                            onChange={(event) => form.setData('name', event.target.value)}
                            className={inputClass(form.errors.name)}
                            required
                            placeholder={isCryptoWallet ? 'USDT Main Wallet' : 'USD Wire Transfer'}
                        />
                    </Field>

                    <Field label="Channel" error={form.errors.channel} required>
                        <input
                            type="text"
                            value={channelLabels[form.data.channel] || form.data.channel}
                            className={inputClass(form.errors.channel)}
                            disabled
                        />
                    </Field>

                    <Field label="Status" error={form.errors.status} required>
                        <select
                            value={form.data.status}
                            onChange={(event) => form.setData('status', event.target.value)}
                            className={inputClass(form.errors.status)}
                            required
                        >
                            {options.statuses.map((status) => (
                                <option key={status} value={status}>
                                    {status}
                                </option>
                            ))}
                        </select>
                    </Field>

                    {isCryptoWallet ? (
                        <Field label="Wallet Address" error={form.errors.wallet_address} required>
                            <textarea
                                value={form.data.wallet_address}
                                onChange={(event) => form.setData('wallet_address', event.target.value)}
                                rows={3}
                                className={inputClass(form.errors.wallet_address)}
                                placeholder="Enter the receiving wallet address"
                                required
                            />
                        </Field>
                    ) : (
                        <Field label="Currency" error={form.errors.currency} required>
                            <select
                                value={form.data.currency}
                                onChange={(event) => form.setData('currency', event.target.value.toUpperCase())}
                                className={inputClass(form.errors.currency)}
                                required
                            >
                                {currencyOptions.map((currency) => (
                                    <option key={currency} value={currency}>
                                        {currency}
                                    </option>
                                ))}
                            </select>
                        </Field>
                    )}

                    <Field
                        label={isCryptoWallet ? 'Network' : 'Transfer Rail'}
                        error={form.errors.network}
                    >
                        <input
                            type="text"
                            value={form.data.network}
                            onChange={(event) => form.setData('network', event.target.value)}
                            className={inputClass(form.errors.network)}
                            placeholder={isCryptoWallet ? 'TRC20 / ERC20 / Bitcoin / Solana' : 'SWIFT / SEPA / ACH'}
                        />
                    </Field>

                    <Field label="Display Order" error={form.errors.display_order}>
                        <input
                            type="number"
                            min="0"
                            value={form.data.display_order}
                            onChange={(event) => form.setData('display_order', Number(event.target.value))}
                            className={inputClass(form.errors.display_order)}
                        />
                    </Field>
                </div>

                {isCryptoWallet && (
                    <section className="rounded-2xl border border-slate-800 bg-slate-950/60 p-5">
                        <div className="mb-4">
                            <h4 className="text-sm font-semibold uppercase tracking-[0.18em] text-slate-200">
                                Crypto Wallet Details
                            </h4>
                            <p className="mt-1 text-sm text-slate-400">
                                Users will see this wallet name, coin, network, and address on the deposit screen.
                            </p>
                        </div>

                        <Field label="Wallet Coin" error={form.errors.currency} required>
                            <select
                                value={form.data.currency}
                                onChange={(event) => form.setData('currency', event.target.value.toUpperCase())}
                                className={inputClass(form.errors.currency)}
                                required
                            >
                                {currencyOptions.map((currency) => (
                                    <option key={currency} value={currency}>
                                        {currency}
                                    </option>
                                ))}
                            </select>
                        </Field>
                    </section>
                )}

                {isBankTransfer && (
                    <section className="rounded-2xl border border-slate-800 bg-slate-950/60 p-5">
                        <div className="mb-4">
                            <h4 className="text-sm font-semibold uppercase tracking-[0.18em] text-slate-200">
                                Bank Account Details
                            </h4>
                            <p className="mt-1 text-sm text-slate-400">
                                These instructions will be shown on the user deposit screen when this bank method is selected.
                            </p>
                        </div>

                        <div className="grid gap-4 md:grid-cols-2">
                            <Field label="Bank Name" error={form.errors.bank_name} required>
                                <input
                                    type="text"
                                    value={form.data.bank_name}
                                    onChange={(event) => form.setData('bank_name', event.target.value)}
                                    className={inputClass(form.errors.bank_name)}
                                    required
                                />
                            </Field>

                            <Field label="Account Name" error={form.errors.account_name} required>
                                <input
                                    type="text"
                                    value={form.data.account_name}
                                    onChange={(event) => form.setData('account_name', event.target.value)}
                                    className={inputClass(form.errors.account_name)}
                                    required
                                />
                            </Field>

                            <Field label="Account Number" error={form.errors.account_number} required>
                                <input
                                    type="text"
                                    value={form.data.account_number}
                                    onChange={(event) => form.setData('account_number', event.target.value)}
                                    className={inputClass(form.errors.account_number)}
                                    required
                                />
                            </Field>

                            <Field label="Routing Number" error={form.errors.routing_number}>
                                <input
                                    type="text"
                                    value={form.data.routing_number}
                                    onChange={(event) => form.setData('routing_number', event.target.value)}
                                    className={inputClass(form.errors.routing_number)}
                                />
                            </Field>

                            <Field label="Swift Code" error={form.errors.swift_code}>
                                <input
                                    type="text"
                                    value={form.data.swift_code}
                                    onChange={(event) => form.setData('swift_code', event.target.value)}
                                    className={inputClass(form.errors.swift_code)}
                                />
                            </Field>

                            <Field label="Reference Letter" error={form.errors.reference_letter}>
                                <input
                                    type="text"
                                    value={form.data.reference_letter}
                                    onChange={(event) => form.setData('reference_letter', event.target.value)}
                                    className={inputClass(form.errors.reference_letter)}
                                />
                            </Field>

                            <div className="md:col-span-2">
                                <Field label="Bank Address" error={form.errors.bank_address}>
                                    <textarea
                                        value={form.data.bank_address}
                                        onChange={(event) => form.setData('bank_address', event.target.value)}
                                        rows={3}
                                        className={inputClass(form.errors.bank_address)}
                                        placeholder="Street, city, state, postal code, country"
                                    />
                                </Field>
                            </div>
                        </div>
                    </section>
                )}

                <Field label="Description" error={form.errors.description}>
                    <textarea
                        value={form.data.description}
                        onChange={(event) => form.setData('description', event.target.value)}
                        rows={3}
                        className={inputClass(form.errors.description)}
                        placeholder="Optional note shown to admins."
                    />
                </Field>

                <div className="flex flex-wrap gap-3">
                    <button
                        type="submit"
                        disabled={form.processing}
                        className="rounded-xl bg-gradient-to-r from-cyan-500 to-emerald-500 px-5 py-2.5 text-sm font-semibold text-slate-950 transition hover:opacity-90 disabled:cursor-not-allowed disabled:opacity-60"
                    >
                        {form.processing ? 'Saving...' : submitLabel}
                    </button>

                    <Link
                        href={cancelUrl}
                        className="rounded-xl border border-slate-700 px-5 py-2.5 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-800"
                    >
                        Cancel
                    </Link>
                </div>
            </form>
        </section>
    );
}

function Field({ label, error, required = false, children }) {
    return (
        <label className="block">
            <span className="mb-2 block text-sm text-slate-300">
                {label} {required ? <span className="text-rose-300">*</span> : null}
            </span>
            {children}
            {error && <span className="mt-1 block text-xs text-rose-300">{error}</span>}
        </label>
    );
}

function inputClass(error) {
    return `w-full rounded-xl border px-3 py-2.5 text-sm outline-none transition ${
        error
            ? 'border-rose-500/60 bg-rose-500/10 text-rose-100 focus:border-rose-400'
            : 'border-slate-700 bg-slate-950 text-slate-100 focus:border-cyan-400'
    }`;
}
