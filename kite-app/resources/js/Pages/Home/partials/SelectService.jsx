export default function SelectService({ service }) {
    return (
        <a
            className="flex justify-between p-10 bg-gray-900 border-2 border-transparent rounded-md font-semibold text-xs text-white uppercase hover:border-white hover:border-2 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out delay-150 hover:scale-110 duration-300"
            disabled={false}
            href={service.homepage}
            target="_blank"
        >
            <img
                src={service.logo_path}
                className="w-20 h-20"
                alt={service.name}
            />
        </a>
    );
}
